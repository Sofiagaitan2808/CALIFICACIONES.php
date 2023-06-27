<?php

include_once('../../Conexion.php');

class Administrador extends Conexion
{
public function __construct()
{
    $this->db = parent::__construct();
}

//inserta un usuario
public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
{
    //VERIFICAR QUE NO EXISTA UN USARIO EN LA BASE DE DATOS
    $sql1= "SELECT * FROM usuarios WHERE Usuario ='$Usuarioad'";
    $Resultado=$this->db->query($sql1);
    if ($Resultado->rowCount() > 0) {
        echo "<script>
        alert('El Usuario ya esta registrado en la base de datos');
        window.Location='../Pages/agregar.php';
        </script>";

    }else{
        //crear la sentencia sql
    $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario, Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

    $statement->bindParam(":Nombread",$Nombread); 
    $statement->bindParam(":Apellidoad",$Apellidoad);
    $statement->bindParam(":Usuarioad",$Usuarioad);
    $statement->bindParam(":Passwordad",$Passwordad);
    $statement->bindParam(":Perfilad",$Perfilad);
    $statement->bindParam(":Estadoad",$Estadoad);
    
    if ($statement->execute())
     {
        echo "Usuario registrado";
        header('Location: ../Pages/index.php');
    }else
    {
        echo "No se puede realizar el registro";
        header('Location: ../Pages/agregar.php');
    }
}
}

//funcion para mostrar todos los usuarios con el rol de administrador
public function getad()
{
    $row = null;
    $statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'");
    $statement->execute();
    while ($resul = $statement->fetch())
    {
        $row[] = $resul;
    }
    return $row;
}

//funcion para selecionar un usuario para su id
public function getiad($Id)
{
    
    $statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id");
    $statement->bindParam(':Id',$Id);
    $statement->execute();
    //obtener los resultados utilizando fetch()
    $resultado =$statement->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

//funcion para actualizar los datos del usuario
public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
{
    $statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id,Nombreusu=:Nombread,Apellidousu=:Apellidoad,Usuario=:Usuarioad,Passwordusu=:Passwordad,Perfil=:Perfilad,Estado=:Estadoad WHERE id_usuario=$Id");

    $statement->bindParam(':Id',$Id);
    $statement->bindParam(':Nombread',$Nombread);
    $statement->bindParam(':Apellidoad',$Apellidoad);
    $statement->bindParam(':Usuarioad',$Usuarioad);
    $statement->bindParam(':Passwordad',$Passwordad);
     $statement->bindParam(':Perfilad',$Perfilad);
    $statement->bindParam(':Estadoad',$Estadoad);
    if($statement->execute())
    {
        header('Location: ../Pages/index.php');
    }else
    {
        header('Location: ../Pages/editar.php');
    }
}

//funcion para eliminar un usuario
public function delete($Id)
{
    $statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=:Id");
    $statement->bindParam(':Id',$Id);
    if($statement->execute())
    {
        echo "Usuario eliminado";
        header('Location: ../Pages/index.php');
    }else
    {
        echo("El Usuario no se puede eliminar");
        header('Location: ../Pages/eliminar.php');
        }
    }
}

?>
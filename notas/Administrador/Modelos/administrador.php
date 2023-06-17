<?php
include_once('../..//Conexcion.php');

class Administrador extends Conexcion
{
public function __construct()
{
	$this->db = parent::__construct();
}
//inserta un usuario

public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
{
	$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Passawordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:'Administrador',:'Activo')");

	$statement->bindParam(":Nombread",$Nombread); 
	$statement->bindParam(":Apellidoad",$Apellidoad);
	$statement->bindParam(":Usuarioad",$Usuarioad);
	$statement->bindParam(":Passwordad",$Passwordad);
	$statement->bindParam(":Perfilad",$Perfilad);
	$statement->bindParam(":Estadoad",$Estadoad);
	if ($statement->execute())
	 {
		echo "Usuarios registrado";
		header('Location ../pages/index.php');
	}else
	{
		echo "No se puede realizar el registro";
		header('Location: ../pages/agregar.php');
	}
}
//funcion para mostrar todos los usuarios con el rol de administrador
public function getad()
{
	$row = null;
	$statement=$this->db->prepare("SELCET * FROM usuarios WHERE Perfil='Administrador'");
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
	$row = null;
	$statement=$this->db->prepare("SELCET * FROM usuarios WHERE Perfil='Administrador' AND id_usuario=:Id");
	$statement->bindParam(';Id',$Id);
	$statement->execute();
	while($resul =$statement->fetch())
	{
		$row=$resul;
	}
	return $row;
}
//funcion para actualizar los datos del usuario
public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad)
{
	$statement=$this->db->prepare("UPDATE usuarios SET Nombreusu=:Nombread,Apellidousu=:Apellidoad,Usuario=:Usuarioad,Passwordusu=:Passwordad,Estado=:Estadoad WHERE id_usuario=$Id");

	$statement->bindParam(':Id',$Id);
	$statement->bindParam('Nombread',$Nombread);
	$statement->bindParam('Apellidoad',$Apellidoad);
	$statement->bindParam('Usuarioad',$Usuarioad);
	$statement->bindParam('Passwordad',$Passwordad);
	$statement->bindParam('Estadoad',$Estadoad);
	if($statement->execute())
	{
		header('Location: ../pages/index.php');
	}else
	{
		header('Location: ../pages/editar.php');
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
		header('Location: ../pages/index.php');
	}else
	{
		echo("El Usuario no s´puede eliminar");
		header('Location: ../pages/eliminar.php');
	}

}


}

?>
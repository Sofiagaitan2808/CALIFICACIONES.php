<?php

class Docente extends Conexion
{
public function __construct()
{
	$this->db = parent::__construct();
}
//inserta un usuario de docente

public function agregardoc($Nombredoce,$Apellidodoce,$Documentodoce,$Correodoce,$Materiado,$Usuariodoce,$Passworddoce,$Perfildoce,$Estadodoce)
{
	/*//VERIFICAR QUE NO EXISTA Un DOCENTE EN LA BASE DE DATOS
    $sql1= "SELECT * FROM docente WHERE Usuariodoc ='$Usuariodoce'";
    $Resultado=$this->db->query($sql1);
    if ($Resultado->rowCount() > 0) {
        echo "<script>
        alert('El Docente ya esta registrado en la base de datos');
        window.Location='../pages/agregar.php';
        </script>";

    }else{*/
	$statement = $this->db->prepare("INSERT INTO docente(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materia,Usuariodoc,Passworddoc,Perfildoc,Estadodoc)values(:Nombredoce,:Apellidodoce,:Documentodoce,:Correodoce,:Materiado,:Usuariodoce,:Passworddoce,:Perfildoce,:Estadodoce)");

	$statement->bindParam(":Nombredoce",$Nombredoce); 
	$statement->bindParam(":Apellidodoce",$Apellidodoce);
	$statement->bindParam(":Documentodoce",$Documentodoce);
	$statement->bindParam(":Correodoce",$Correodoce);
	$statement->bindParam(":Materiado",$Materiado);
	$statement->bindParam(":Usuariodoce",$Usuariodoce);
	$statement->bindParam(":Passworddoce",$Passworddoce);
	$statement->bindParam(":Perfildoce",$Perfildoce);
	$statement->bindParam(":Estadodoce",$Estadodoce);
	if ($statement->execute())
	 {
		echo "Docente registrado";
		header('Location: ../pages/index.php');
	}else
	{
		echo "No se puede realizar el registro";
		header('Location: ../pages/agregar.php');
	}
//}

}
public function getdoc()
{
	$row = null;
	$statement=$this->db->prepare("SELECT * FROM docente WHERE Perfildoc='profesor'");
	$statement->execute();
	while ($resul = $statement->fetch())
	{
		$row[] = $resul;
	}
	return $row;

}
public function getidoc($Id)
{
	$row = null;
	$statement=$this->db->prepare("SELECT * FROM docente WHERE Perfildoc='profesor' AND id_docente=:Id");
	$statement->bindParam(':Id',$Id);
	$statement->execute();
	while($resul =$statement->fetch())
	{
		$row=$resul;
	}
	return $row;
}

public function updatedoc($Id,$Nombredoce,$Apellidodoce,$Documentodoec,$Correodoce,$Materiado,$Usuariodoce,$Passworddoce,$Perfildoce,$Estadodoce)
{
	$statement=$this->db->prepare("UPDATE Docente SET id_docente=:Id, Nombredoc=:Nombredoce,Apellidodoc=:Apellidodoce,Documentodoc=:Documentodoce,Correodoc=:Correodoce,Materia=:Materiado,Usuariodoc=:Usuariodoce,Passworddoc=:Passworddoce,Perfildoc=:Perfildoce,Estadodoc=:Estadodoce WHERE id_docente=:Id");

	$statement->bindParam(':Id',$Id);
	$statement->bindParam(':Nombredoce',$Nombredoce);
	$statement->bindParam(':Apellidodoce',$Apellidodoce);
	$statement->bindParam(':Documentodoce',$Documentodoce);
	$statement->bindParam(':Correodoce',$Correodoce);
	$statement->bindParam(':Materiado',$Materiado);
	$statement->bindParam(':Usuariodoce',$Usuariodoce);
	$statement->bindParam(':Passworddoce',$Passworddoce);
	$statement->bindParam(':Perfildoce',$Perfildoce);
	$statement->bindParam(':Estadodoce',$Estadodoce);
	if($statement->execute())
	{
		header('Location: ../pages/index.php');
	}else
	{
		header('Location: ../pages/editar.php');
	}

}

public function delete($Id)
{
	$statement=$this->db->prepare("DELETE * FROM docente WHERE id_docente=:Id");
	$statement->bindParam(':Id',$Id);
	if($statement->execute())
	{
		echo "Docente eliminado";
		header('Location: ../pages/index.php');
	}else
	{
		echo("El Docente no se puede eliminar");
		header('Location: ../pages/eliminar.php');
	}

}


}

?>


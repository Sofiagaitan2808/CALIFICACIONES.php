<?php 
class Docentes Conexcion
{
public function __construct()
{
	$this->db = parent::__construct();
}
//inserta un usuario de docente

public function agregardoc($Nombredoce,$Apellidodoce,$Documentodoce,$Correodoce,$Materiado,$Notasdo)
{
	$statement = $this->db->prepare("INSERT INTO docente(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materia,Notas)values(:Nombredoce,:Apellidodoce,:Documentodoce,:Correodoce,:Materiado,:Notasdo,:'Administrador',:'Activo')");

	$statement->bindParam(":Nombredoce",$Nombredoc); 
	$statement->bindParam(":Apellidodoce",$Apellidodoc);
	$statement->bindParam(":Documentodoce",$Documentodoc);
	$statement->bindParam(":Correodoce",$Correodoc);
	$statement->bindParam(":Materiado",$Materia);
	$statement->bindParam(":Notasdo",$Notas);
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
public function getdoc()
{
	$row = null;
	$statement=$this->db->prepare("SELCET * FROM docente WHERE Perfil='Administrador'");
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
	$statement=$this->db->prepare("SELCET * FROM docente WHERE Perfil='Administrador' AND id_docente=:Id");
	$statement->bindParam(';Id',$Id);
	$statement->execute();
	while($resul =$statement->fetch())
	{
		$row=$resul;
	}
	return $row;
}

public function updatead($Id,$Nombredoce,$Apellidodoce,$Documentodoec,$Correodoce,$Materiado,$Notasdo)
{
	$statement=$this->db->prepare("UPDATE Docentes SET Nombredoc=:Nombredoce,Apellidodoc=:Apellidodoce,Documentodoc=:Documentodoce,Correodoc=:Correodoce,Materia=:Materiado,Notas=:Notasdo WHERE id_docente=$Id");

	$statement->bindParam(':Id',$Id);
	$statement->bindParam('Nombredoce',$Nombredoc);
	$statement->bindParam('Apellidodoce',$Apellidodoc);
	$statement->bindParam('Documentodoce',$Documentodoc);
	$statement->bindParam('Correodoce',$Correodoc);
	$statement->bindParam('Materiado',$Materia);
	$statement->bindParam('Notasdo',$Notas);
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
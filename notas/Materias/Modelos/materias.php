<?php
class Materias Conexcion
{
public function __construct()
{
	$this->db = parent::__construct();
}
//inserta una materia

public function agregarma($Nombremates)
{
	$statement = $this->db->prepare("INSERT INTO materias(Nombremate)values(:Nombremate,:'Administrador',:'Activo')");

	$statement->bindParam(":Nombremates",$Nombremate); 
	if ($statement->execute())
	 {
		echo "Materia registrado";
		header('Location ../pages/index.php');
	}else
	{
		echo "No se puede realizar el registro";
		header('Location: ../pages/agregar.php');
	}
}

public function getma()
{
	$row = null;
	$statement=$this->db->prepare("SELCET * FROM materia WHERE Perfil='Administrador'");
	$statement->execute();
	while ($resul = $statement->fetch())
	{
		$row[] = $resul;
	}
	return $row;

}

public function getima($Id)
{
	$row = null;
	$statement=$this->db->prepare("SELCET * FROM materia WHERE Perfil='Administrador' AND id_materia=:Id");
	$statement->bindParam(';Id',$Id);
	$statement->execute();
	while($resul =$statement->fetch())
	{
		$row=$resul;
	}
	return $row;
}

public function updatead($Id,$Nombremate)
{
	$statement=$this->db->prepare("UPDATE materias SET Nombremate=:Nombremates WHERE id_materia=$Id");

	$statement->bindParam(':Id',$Id);
	$statement->bindParam('Nombremates',$Nombremate);
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
	$statement=$this->db->prepare("DELETE * FROM materias WHERE id_materia=:Id");
	$statement->bindParam(':Id',$Id);
	if($statement->execute())
	{
		echo "materia eliminado";
		header('Location: ../pages/index.php');
	}else
	{
		echo("La materia no se puede eliminar");
		header('Location: ../pages/eliminar.php');
	}

}


}
?>
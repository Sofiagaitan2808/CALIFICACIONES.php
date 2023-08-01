<?php
class Estudiante extends Conexion{
	public function ___construct(){
		$this->db=parent::___construct();
}

//inserta un estudiante
	public function agregares($Nombrees,$Apellidoes,$Documentoes,$Correoes,$Materiaes,$Docentees,$Promedioes,$Registroes)
	{
		$statement=$this->db->prepare("INSERT INTO estudiantes(Nombrestu,Apellidouestu,Documentoestu,Correoestu,Materia,Docente,Promedio,Fecha_registro)values(:Nombrees,:Apellidoes,:Documentoes,:Correoes,Materiaes,:Docentees,:Promedioes,:Registroes,:'Estudiante',:'Activo')");
		$statement->bindParam(":Nombrees",$Nombrees);
		$statement->bindParam(":Apellidoes",$Apellidoes);
		$statement->bindParam(":Documentoes",$Documentoes);
		$statement->bindParam(":Correoes",$Correoes);
		$statement->bindParam(":Materiaes",$Materiaes);
		$statement->bindParam(":Docentees",$Docentees);
		$statement->bindParam(":Promedioes",$Promedioes);
		$statement->bindParam(":Registroes",$Registroes);
		
	if($statement->execute()){
		echo"Estudiante registrado con éxito";
		header('Location:../pages/index.php');
	}else  {
		echo"Occurrió un error al realizar el registro";
		header('Location:../pages/agregar.php');
	}
}

//funcion para mostrar todos los estudiantes con el rol de estudiante
	public function getad()
	{
    	$row = null;
    	$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE Nombreestu='Estudiante'");
    	$statement->execute();

    while ($resul = $statement->fetch())
    {
        $row[] = $resul;
    }
    return $row;

}
	
//funcion para selecionar un estudiante con su id
	public function geties($Id)
	{
    	$row = null;
    	$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE Nombreestu='Estudiante' AND id_estudiante=:Id");
    	$statement->bindParam(':Id',$Id);
    	$statement->execute();

    while($resul =$statement->fetch())
    {
        $row=$resul;
    }
    return $row;
}

//funcion para actualizar los datos del estudiante
	public function updatead($Id,$Nombrees,$Apellidoes,$Documentoes,$Correoes,$Materiaes,$Docentees,$Promedioes,$Registroes)
	{
    	$statement=$this->db->prepare("UPDATE estudiantes SET Nombrestu=:Nombrees,Apellidouestu=:Apellidoes,Documentoestu=:Documentoes,Correoestu=:Correoes,Materia=:Materiaes, Docente=:Docentees, Promedio=:Promedioes, Fecha_registro=:Registroes WHERE id_estudiante=$Id");

    	$statement->bindParam(':Id',$Id);
    	$statement->bindParam(":Nombrees",$Nombrees);
		$statement->bindParam(":Apellidoes",$Apellidoes);
		$statement->bindParam(":Documentoes",$Documentoes);
		$statement->bindParam(":Correoes",$Correoes);
		$statement->bindParam(":Materiaes",$Materiaes);
		$statement->bindParam(":Docentees",$Docentees);
		$statement->bindParam(":Promedioes",$Promedioes);
		$statement->bindParam(":Registroes",$Registroes);
    if($statement->execute())
    {
        header('Location: ../pages/index.php');
    }else
    {
        header('Location: ../pages/editar.php');
    }

}

//funcion para eliminar un estudiante
	public function delete($Id)
	{
    	$statement=$this->db->prepare("DELETE * FROM estudiantes WHERE id_estudiante=:Id");
    	$statement->bindParam(':Id',$Id);

    if($statement->execute())
    {
        echo "Estudiante eliminado";
        header('Location: ../pages/index.php');
    }else
    {
        echo("El Estudiante no se puede eliminar");
        header('Location: ../pages/eliminar.php');
    	}
	}
}


?>
<?php
include_once('../../Conexion.php');
class Administrador extends Conexion
{
	public function ___construct(){
		$this->db=parent::___construct();
	}
	public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
	{
		$statement=$this->db->prepare("INSERT INTO usario(Nombresu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,Perfilad,:Estadoad");
		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Usuarioad",$Usuarioad);
		$statement->bindParam(":Passwordad",$Passwordad);
		$statement->bindParam(":Perfilad",$Perfilad);
		$statement->bindParam(":Estadoad",$Estadoad);
		if($statement->execute()){
			echo"Usuario registrado con éxito";
		}else  {
			echo"Occurrió un error al realizar el registro";
		}



	}



}

?>
<?php
class Conexion{

	protected $db;//me va a manejar todo el control.
	private $drive="mysql";
	private $host="localhost";//servidor.
	private $dbname="calificaciones";
	private $user="root";
	private $pasword="";


public function ___construct()
{
	try{
		$db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user,$this->pasword);


		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
		
		return $db;

		echo "conexion realizada";

	}catch(PDOExeption $e){

		echo"se tiene problemas para conectar".$e->getMessage();//el getMessage es para saber que tipode problema bota la conexion.

	}
}

}


?>
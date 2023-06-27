<?php
class Conexion{

    public $db;//me va a manejar todo el control.
    private $drive="mysql";
    private $host="localhost";//servidor.
    private $dbname="notas2023";
    private $user="root";
    private $pasword="";


public function __construct()
{
    try{
        $db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user,$this->pasword);


        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $db;

        echo "conexion realizada";

    }catch(PDOExeption $e){

        echo"se tiene problemas para conectar".$e->getMessage();//el getMessage es para saber que tipode problema bota la conexion.

    }
}

}

?>
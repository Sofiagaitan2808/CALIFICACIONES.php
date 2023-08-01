<?php
require_once('../../Conexion.php');
require_once('../modelos/Usuarios.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$usuario =$_POST['txtusu'];
	$contrasena = $_POST['txtcontra'];

	//creamos la instancia de la clase usuario

	$use = new Usuario();
	
	$use->login($usuario, $contrasena);



	//redireccionar el controlador de acuerdo al rol
	if($use->isinicioid()){
		if ($use ->isadmin()) {
			header('Location:../../Administrador/pages/index.php');
		}elseif($use->isdocen()){
			header('Location:../../Materia/pages/index.php');
		}
		exit();
	}else{
		print"<script>alert('nombre de usuario o contraseña no valida'); window.location='../../Index.php';</script>";
	}
}

?>
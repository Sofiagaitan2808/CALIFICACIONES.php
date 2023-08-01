<?php
if($_POST['txtusu']=="sofia gaitan" && $_POST['txtcontra']=="123456"){
	//crear la sesion
	session_start();
	//definir variables de sesion
	$_SESSION['usuario']=$_POST['txtusu'];
	//para que cualquier persona no ingrese
	$_SESSION['validar']=true;
	$_SESSION['start']=time();
	$_SESSION['expire']=$_SESSION['start']+(1*60);
	header("Location: ../../Administrador/pages/index.php");

}else{
	print"<script>alert(\"verifique los datos de ingreso \");
	window.location='../../index.php';</script>";
}
?>
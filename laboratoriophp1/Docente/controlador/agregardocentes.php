<?php
require_once('../../Conexion.php');
require_once('../modelos/docente.php');

if ($_POST) {
	// crear un objeto de la clase docente.
	$admin=new Docente();
	$Nombredoc=$_POST['txtnomdo'];
	$Apellidodoc=$_POST['txtapedo'];
	$Documentodoc=$_POST['txtdocudo'];
	$Correodoc=$_POST['txtcorreo'];
	$Materia=$_POST['txtmatedo'];
	$Usuariodoc=$_POST['txtusudo'];
	$Passworddoc=MD5($_POST['txtpasdoc']);
	$Perfildoc=$_POST['txtperfildo'];
	$Estadodoc=$_POST['txtestadoc'];

	
	

	$admin->agregardoc($Nombredoc, $Apellidodoc,$Documentodoc,$Correodoc,$Materia,$Usuariodoc,$Passworddoc,$Perfildoc,$Estadodoc);
}
?>
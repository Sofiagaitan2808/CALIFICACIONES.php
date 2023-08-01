
<?php
require_once('../../Conexion.php');
require_once('../modelos/materia.php');

if ($_POST) {
	// crear un objeto de la clase materia.
	$admin=new Materia();
	$Nombremate=$_POST['txtnomate'];
	

	$admin->agregarma($Nombremate);
}
?>
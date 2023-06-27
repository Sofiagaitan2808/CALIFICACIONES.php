<?php
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');
if ($_POST) {
    $admin =new Administrador();
    $Id=$_POST['txtid'];
    $Nombreusu=$_POST['txtnom'];
    $Apellidousu=$_POST['txtape'];
    $Usuariousu=$_POST['txtusu'];
    $Passwordusu=MD5($_POST['txtcontra']);
    $Perfilusu=$_POST['txtperfil'];
    $Estadousu=$_POST['txtestado'];

    $admin->updatead($Id, $Nombreusu, $Apellidousu,$Usuariousu,$Passwordusu,$Perfilusu,$Estadousu);
}
?>
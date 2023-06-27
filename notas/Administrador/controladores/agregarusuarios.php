<?php
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');

if ($_POST) {
    // crear un objeto de la clase administrador.
    $admin=new Administrador();
    $Nombreusu=$_POST['txtnom'];
    $Apellidousu=$_POST['txtape'];
    $Usuariousu=$_POST['txtusu'];
    $Passwordusu=MD5($_POST['txtcontra']);
    $Perfilusu=$_POST['txtperfil'];
    $Estadousu=$_POST['txtestado'];

    $admin->agregarad($Nombreusu, $Apellidousu,$Usuariousu,$Passwordusu,$Perfilusu,$Estadousu);
}
?>
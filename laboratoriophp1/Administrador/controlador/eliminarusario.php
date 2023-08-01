<?PHP
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');

//verificar el formulario enviado
$ad = new Administrador();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Id = $_POST['Id'];
    $result=$ad->delete($Id);

    if($result){
        print "<script>alert('Se elimino el usuario');
        window.location='../pages/index.php';</script>";
    }else{
        print "<script>alert('No se puede eliminar el usuario');
        window.location='../pages/eliminar.php';</script>";
    }
}
?>
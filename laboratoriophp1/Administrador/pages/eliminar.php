

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
//require_once('../../Usuario/controlador/validar.php');
?>
<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">

<div class="container">

<ul class="nav nav-underline justify-content-center">
<li class="nav-item">
<a href="../../Administrador/pages/index.php" class="nav-link active">Administrador</a>
</li>



<li class="nav-item">
<a href="../../Docente/pages/index.php" class="nav-link">Docente</a>
</li>



<li class="nav-item">
<a href="../../Estudiante/pages/index.php" class="nav-link">Estudiante</a>
</li>



<li class="nav-item">
<a href="../../Materia/pages/index.php" class="nav-link">Materias</a>
</li>

</ul>

<ul class="nav nav-pills">

<li class="nav-item">
<a class="nav-link">ingresar</a>
</li>


<li class="nav-item">
    <a href="../../Usuario/controlador/salir.php" class="nav-link">Cerrar sesion</a>
</li>
</ul>


</div>

</nav>
    <h2>ELIMINAR USUARIO</h2>
    <?PHP
        require_once('../../Conexion.php');
        require_once('../modelos/administrador.php');
        
        $admin = new Administrador();
        $Id = $_GET['Id'];
    ?>

    <form action="../controlador/eliminarusuario.php" method="POST">
     <h3>Bienvenido <?php echo $_SESSION['usuario'] ?></h3>
        <div class="form-group">
        <label>Id del usario</label>
        <input type="number" name="Idusu" placeholder="Ingrese el numero de id que desea eliminar">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Eliminar">
    </form>
</body>
</html>
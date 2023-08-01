<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>mate</title>
</head>
<body>
    <h2>ELIMINAR MATERIA</h2>
    <?PHP
        require_once('../../Conexion.php');
        require_once('../modelos/administrador.php');
        
        $admin = new Administrador();
        $Id = $_GET['Id'];
    ?>
    <form action="../controlador/eliminarmateria.php" method="POST">
        <div class="form-group">
        <label>id materia</label>
        <input type="number" name="Idusu" placeholder="Ingrese nombre de la materia que desea eliminar">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Eliminar">
    </form>
</body>
</html>
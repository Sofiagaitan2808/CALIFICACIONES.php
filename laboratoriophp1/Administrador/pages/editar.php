

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	
</head>
<body>
	<?php
		require_once('../../Conexion.php');
		require_once('../modelos/administrador.php');
		$Id= $_GET['Id'];
		$admin = new Administrador();
		$row = $admin->getiad($Id);
		if ($row) {
			
		
	?>

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
	
	
	<div class="container" >
		
		<form action="../controlador/editarusuario.php" method="POST" class="table" >
			<h3>Bienvenido <?php echo $_SESSION['usuario'] ?></h3>
			<h2 style="color: #EE89F6; text-align: center">ACTUALIZAR DATOS DE USUARIO</h2>
			<input type="hidden" name="txtid" value="<?php echo $Id?>">
			<div class="form-group" >
				<label>Nombre:</label>
				<br>
				<input type="text" name="txtnom" placeholder ="Ingrese du nombre" value="<?php echo $row['Nombreusu'] ?>">
			</div>
			<br>
			<div class="form-group">
				<label>Apellido:</label>
				<br>
				<input type="text" name="txtape" placeholder ="Ingrese su apellido"value="<?php echo $row['Apellidousu'] ?>">
			</div>
			<br>
			<div class="form-group">
				<label>Usuario:</label>
				<br>
				<input type="text" name="txtusu" placeholder="Ingrese su nombre"value="<?php echo $row['Usuario'] ?>">
			</div>
			<br>
			<div class="form-group">
				<label>Contraseña:</label>
				<br>
				<input type="password" name="txtcontra" placeholder ="Ingrese su contraseña"value="<?php echo $row['Passwordusu'] ?>">
			</div>
			<br>
			<div class="form-group">
				<label>Perfil:</label>
				<select name="txtperfil"value="<?php echo $row['Perfil'] ?>" >
					<option value="Administrador">Administrador</option>
					<option value="Docente">Docente</option>
				</select>
			</div>
			<br>
			<div class="form-group">
				<label>Estado:</label>
				<select name="txtestado"value="<?php echo $row['Estado'] ?>" >
					<option value="Activo">Activo</option>
					<option value="Inactivo">Inactivo</option>

				</select>
			</div>
			<br>
			<input type="submit" class="btn btn-primary" value="Actualizar">
		</form>

	</div>
	<?php } ?>
</body>
</html>
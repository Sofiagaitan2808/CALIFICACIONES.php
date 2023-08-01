

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	
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
	<div class="container" >
		
		<form action="../controlador/agregarusuarios.php" method="POST" >
			<h3>Bienvenido <?php echo $_SESSION['usuario'] ?></h3>
			<h1 class="center">REGISTRO DE USUARIOS</h1>

			<div class="form-group" >
				<label>Nombre:</label>
				<input type="text" name="txtnom" placeholder ="Ingrese du nombre">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtape" placeholder ="Ingrese su apellido">
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<input type="text" name="txtusu" placeholder="Ingrese su nombre">
			</div>
			<div class="form-group">
				<label>Contraseña:</label>
				<input type="password" name="txtcontra" placeholder ="Ingrese su contraseña">
			</div>
			<div class="form-group">
				<label>Perfil:</label>
				<select name="txtperfil" >
					<option value="Administrador">Administrador</option>
					<option value="Docente">Docente</option>
				</select>
			</div>
			<div class="form-group">
				<label>Estado:</label>
				<select name="txtestado" >
					<option value="Activo">Activo</option>
					<option value="Inactivo">Inactivo</option>

				</select>
			</div>
			<input type="submit" class="btn btn-primary" value="Registrar">
		</form>

	</div>
</body>
</html>
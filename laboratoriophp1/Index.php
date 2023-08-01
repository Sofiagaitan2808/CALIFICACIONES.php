<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
</head>
<body class="bg-luz bg-gradiente">
	
	<div class="container">
	<h1>INICIAR SESION</h1>
	<h2>Para acceder a todas sus funciones</h2>
		<form action="Usuario/controlador/usuarioscontrol.php" method="POST">

			<div class="form-group">
				<label>Nombre:</label>
				<input type="text" name="txtusu" placeholder="Ingrese su nombre">
			</div>
			<div class="form-group">
				<label>Contraseña:</label>
				<input type="password" name="txtcontra" placeholder="Ingrese su contraseña">
			</div>
			<a href="">Olvidaste tu contraseña?</a>
			<br>
			<input type="submit" class="btn btn-primary" name="" value="INICIAR SESION">
			<br>
			<label>No tienes cuenta?</label>
			<br>
			<a href="Administrador/pages/agregar.php">Inscribe</a>
		</form>

	</div>
</body>
</html>
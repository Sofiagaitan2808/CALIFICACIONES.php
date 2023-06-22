<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	
	<div class="container" >
		
		<form action="../controlador/agregarusuarios.php" method="POST" >
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
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
			<h1 class="center">REGISTRO DEL DOCENTE</h1>

			<div class="form-group" >
				<label>Nombre:</label>
				<input type="text" name="txtnomdo" placeholder ="Ingrese du nombre">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtapedo" placeholder ="Ingrese su apellido">
			</div>
			<div class="form-group">
				<label>Documento:</label>
				<input type="text" name="txtdocudo" placeholder="Ingrese su nombre">
			</div>
			<div class="form-group">
				<label>Correo:</label>
				<input type="email" name="txtcorreo" placeholder ="Ingrese su contraseña">
			</div>
			<div class="form-group">
				<label>Materia:</label>
				<select name="txtmate" >
					<option value="Matematicas">Matematicas</option>
					<option value="Ingles">Ingles</option>
					<option value="Sociales">Sociales</option>
					<option value="Ciencias">Ciencias</option>
					<option value="Sociales">Sociales</option>
					<option value="Sociales">Sociales</option>
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
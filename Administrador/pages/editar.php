<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
	
	<div class="container" >
		
		<form action="../controlador/editarusuario.php" method="POST" class="table" >
			
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
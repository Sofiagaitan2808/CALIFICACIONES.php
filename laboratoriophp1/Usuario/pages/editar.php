<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<?php
		require_once('../../Conexion.php');
		require_once('../modelos/Usuarios.php');
		$Id= $_GET['Id'];
		$admin = new Docente();
		$row = $admin->getidoc($Id);
		if ($row) {
			
		
	?> 
	
	<div class="container" >
		
		<form action="../controlador/editar.php" method="POSTusuarios" >
			<h1 class="center">ACTUALIZAR USUARIOS</h1>

			<input type="hidden" name="txtid" value="<?php echo $Id ?>">
			<div class="form-group" >
				<label>Nombre:</label>
				<input type="nombre" name="txtnomdo" placeholder ="Ingrese su nombre" value="<?php echo $row['Nombreusu'] ?>">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="Apellido" name="txtapedo" placeholder ="Ingrese su apellido" value="<?php echo $row['Apellidousu'] ?>">
			</div>
			<div class="form-group">
				<label>Usuarios:</label>
				<input type="usuarios" name="txtdocudo" placeholder="Ingrese su Usuario"  value="<?php echo $row['Usuario'] ?>">
			</div>
			<div class="form-group">
				<label>Cotraseña:</label>
				<input type="contraseña" name="txtcorreo" placeholder ="Ingrese su contraseña" value="<?php echo $row['Passwordusu'] ?>">
			</div>
			<div class="form-group">
				<label>Perfil:</label>
				<select name="txtmatedo">
				<option value="<?php echo $row['Perfil'] ?>">
				</select>
			</div>
			<div class="form-group">
				<label>Estado:</label>
				<input type="Estado" name="txtusudo" placeholder="Ingrese su Estado" value="<?php echo $row['Estado'] ?>">
			</div>
			
                <option name='inactivo'>inactivo</option>
                </select>
            </div>
			

			<input type="submit" class="btn btn-primary" value="Registrar">
		</form>

	</div>
	<?php } ?>
</body>
</html>
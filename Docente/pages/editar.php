<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<?php
		require_once('../../Conexion.php');
		require_once('../modelos/docente.php');
		$Id= $_GET['Id'];
		$admin = new Docente();
		$row = $admin->getidoc($Id);
		if ($row) {
			
		
	?> 
	
	<div class="container" >
		
		<form action="../controlador/editardocentes.php" method="POST" >
			<h1 class="center">ACTUALIZAR DOCENTE</h1>

			<input type="hidden" name="txtid" value="<?php echo $Id ?>">
			<div class="form-group" >
				<label>Nombre:</label>
				<input type="text" name="txtnomdo" placeholder ="Ingrese su nombre" value="<?php echo $row['Nombredoc'] ?>">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtapedo" placeholder ="Ingrese su apellido" value="<?php echo $row['Apellidodoc'] ?>">
			</div>
			<div class="form-group">
				<label>Documento:</label>
				<input type="text" name="txtdocudo" placeholder="Ingrese su documento"  value="<?php echo $row['Documentodoc'] ?>">
			</div>
			<div class="form-group">
				<label>Correo:</label>
				<input type="email" name="txtcorreo" placeholder ="Ingrese su contraseña" value="<?php echo $row['Correodoc'] ?>">
			</div>
			<div class="form-group">
				<label>Materia:</label>
				<select name="txtmatedo">
				<option value="<?php echo $row['Materia'] ?>">matematicas</option>
				</select>
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<input type="text" name="txtusudo" placeholder="Ingrese su Usuario" value="<?php echo $row['Usuariodoc'] ?>">
			</div>
			<div class="form-group">
				<label>Contraseña:</label>
				<br>
				<input type="password" name="txtpasdoc" placeholder ="Ingrese su contraseña" value="<?php echo $row['Passworddoc'] ?>">
            <div class="form-group">
                <label>perfil:</label>
                <select name="txtperfildo" >
                <option value="<?php echo $row['Perfildoc'] ?>">profesor</option>
                </select>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select name="txtestadoc" >
                <option value="<?php echo $row['Estadodoc'] ?>" selected><?php echo $row['Estadodoc'] ?></option>
                <option name='inactivo'>inactivo</option>
                </select>
            </div>
			

			<input type="submit" class="btn btn-primary" value="Registrar">
		</form>

	</div>
	<?php } ?>
</body>
</html>
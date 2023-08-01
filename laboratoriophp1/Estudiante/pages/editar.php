<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<?php
		require_once('../../Conexion.php');
		require_once('../modelos/Estudiante.php');
		$Id= $_GET['Id'];
		$admin = new Docente();
		$row = $admin->getidoc($Id);
		if ($row) {
			
		
	?> 
	
	
	<div class="container" >
		
		<form action="../controlador/editardocentes.php" method="POST" >
			<h1 class="center">ACTUALIZAR ESTUDIANTE</h1>

			<input type="hidden" name="txtid" value="<?php echo $Id ?>">
			<div class="form-group" >
				<label>Nombre:</label>
				<input type="text" name="txtnomdo" placeholder ="Ingrese su nombre" value="<?php echo $row['Nombreestu'] ?>">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtapedo" placeholder ="Ingrese su apellido" value="<?php echo $row['Apellidoestu'] ?>">
			</div>
			<div class="form-group">
				<label>Documento:</label>
				<input type="text" name="txtdocudo" placeholder="Ingrese su documento"  value="<?php echo $row['Documentoestu'] ?>">
			</div>
			<div class="form-group">
				<label>Correo:</label>
				<input type="email" name="txtcorreo" placeholder ="Ingrese su contraseña" value="<?php echo $row['Correoestu'] ?>">
			</div>
			<div class="form-group">
				<label>Materia:</label>
				<select name="txtmatedo">
				<option value="<?php echo $row['Materia'] ?>">matematicas</option>
				</select>
			</div>
			<div class="form-group">
				<label>Docente:</label>
				<input type="text" name="txtusudo" placeholder="Ingrese su Docente" value="<?php echo $row['Docente'] ?>">
			</div>
			<div class="form-group">
				<label>Promedio:</label>
				<br>
				<input type="Promedio" name="txtpasdoc" placeholder ="Ingrese su Promedio" value="<?php echo $row['Promedio'] ?>">
            <div class="form-group">
                <label>perfil:</label>
                <select name="txtperfildo" >
                <option value="<?php echo $row['perfil'] ?>">perfil</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fecha de registro:</label>
                <select name="txtestadoc" >
                <option value="<?php echo $row['Fecha_resgistro'] ?>" selected><?php echo $row['Fecha_resgistro'] ?></option>
                <option name='inactivo'>promedio</option>
                </select>
            </div>
			

			<input type="submit" class="btn btn-primary" value="Registrar">
		</form>

	</div>
	<?php } ?>
</body>
</html>
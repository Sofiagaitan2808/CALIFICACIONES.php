<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	
	<div class="container" >
		
		<form action="../controlador/Usuario.php" method="POST" >
			<h1 class="center">CONSTANCIAS DEL USUARIOS </h1>

			<div class="form-group" >
				<label>Nombre:</label>
				<input type="nombre" name="txtnomdo" placeholder ="Ingrese su nombre">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="apellido" name="txtapedo" placeholder ="Ingrese su apellido">
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<input type="usuario" name="txtdocudo" placeholder="Ingrese su documento">
			</div>
			<div class="form-group">
				<label>Passwordusu:</label>
				<input type="contraseña" name="txtcorreo" placeholder ="Ingrese su contraseña">
			</div>

			<div class="form-group">
				<label>Perfil:</label>
				<input type="perfil" name="txtcorreo" placeholder ="Ingrese su perfil">
			</div>

			<div class="form-group">
				<label>Estado:</label>
				<input type="estado" name="txtcorreo" placeholder ="Ingrese su estado">
			</div>
			
				
				
				</select>
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<input type="usuario" name="txtusudo" placeholder="Ingrese su Usuario">
			</div>
			<div class="form-group">
                <label>Password:</label>
                <input type="password" name="txtpasdo" placeholder="Ingrese su contraseña">
            </div>
                <div class="form-group">
                <label>perfil:</label>
                <select name="txtperfildo" >
                <option name='perfil'>profesor</option>
                </select>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select name="txtestadodo" >
                <option name='activo'>activo</option>
                <option name='inactivo'>inactivo</option>
                </select>
            </div>
			

			<input type="submit" class="btn btn-primary" value="Registrar">
		</form>

	</div>
</body>
</html>
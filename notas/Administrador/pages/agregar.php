<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <div class="container" >
    	<body style="background-color:blanchedalmond;">
        
        <form action="../controladores/agregarusuarios.php" method="POST" >
            <h1 class="text-center">REGISTRO DE USUARIOS</h1>

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
            <br>
            <input type="submit" class="btn btn-warning" value="Registrar">
        </form>

    </div>
</body>
</html>


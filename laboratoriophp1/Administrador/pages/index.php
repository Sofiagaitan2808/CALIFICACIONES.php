

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title></title>
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

<div class="container">
	<h3>Bienvenido <?php echo $_SESSION['usuario'] ?></h3>
<h1 style="color: mediumpurple; text-align: center;">Listado de usuario</h1>
<div col="col-aut-mt-5">
	<table class="table table-hover" style="background:#FDE3E9">
		<tr>
			<th>ID USUARIO</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>USUARIO</th>
			<th>PERFIL</th>
			<th>ESTADO</th>
			<th>ACTUALIZAR</th>
			<th>ELIMINAR</th>

		</tr>
		<tbody>
			<?php

			require_once('../../Conexion.php');
			require_once('../modelos/administrador.php');
			//crera el objeto para acceder a las funciones de la clase administrador
			$obj= new Administrador();
			$datos= $obj-> getad();

			
			foreach($datos as $datos){
				?>

			<tr>
				<td><?php echo $datos['id_usuario'];?></td>
				<td><?php echo $datos['Nombreusu'];?></td>
				<td><?php echo $datos['Apellidousu'];?></td>
				<td><?php echo $datos['Usuario'];?></td>
				<td><?php echo $datos['Perfil'];?></td>
				<td><?php echo $datos['Estado'];?></td>
				<td><a href="editar.php?Id=<?php echo $datos['id_usuario']?>" style="color: #33077E;">Actualizar</a></td>
				<td><a href="eliminar.php?Id=<?php echo $datos['id_usuario']?>" style="color: #33077E;
					">Eliminar</a></td>

			</tr>
		<?php } ?>
		</tbody>

	</table>

</div>

</div>
</body>
</html>
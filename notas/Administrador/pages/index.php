<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestion</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<h1 style="color:blu;text-align: center;">LISTADO DE USUARIOS</h1>



	<div col="col-auto-mt-5">

		<table class="table table-hover" style="background:#F6F5E;">
		<tr>


	<th>ID USUARIO</th>	
	<th>NIMBRE</th>	
	<th>APELLIDO</th>	
	<th>USUARIO</th>	
	<th>PERFIL</th>	
	<th>ESTADO</th>	
	<th>ACTUALIZAR</th>	
	<th>IELIMINAR</th>	
	</tr>




	<tbody>
	<?php 
	require_once('../../Conexion.php');
	require_once('../modelos/administrador.php');

	//crear el objetiivo para acceder a las funciones de la calse administrador 
	$obj =new Administrador();
	$datos = $obj->getad();

	foreach ($datos as $datos) {
		
	?>


	<tr>
		<td><?php echo $datos['id_usuario'];?></td>
		<td><?php echo $datos['Nombreusu'];?></td>
		<td><?php echo $datos['Apellidousu'];?></td>
		<td><?php echo $datos['Usuario'];?></td>
		<td><?php echo $datos['Perfil'];?></td>
		<td><?php echo $datos['Estado'];?></td>
		<td><a href="editar.php?Id=<?php echo $datos['id_usuario']?>" class="bt btn-primary">ACTUALIZAR</a></td>
		<td><a href="eliminar.php?Id=<?php echo $datos['id_usuario']?>" class="btn btn-primary">ELIMINAR</a></td>
	</td>

	<?php } ?>


			</body>
			
		</table>
		
		</div>
	</body>
</html>
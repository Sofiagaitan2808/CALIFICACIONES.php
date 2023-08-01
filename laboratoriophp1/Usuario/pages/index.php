<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>

<div class="container">
<h1 style="color: #F69B89; text-align: center;">Listado de docentes</h1>
<div col="col-aut-mt-5">
	<table class="table table-hover" style="background:#B07165">
		<tr>
			<th>Nombreusu</th>
			<th>Apellidousu</th>
			<th>Usuario</th>
			<th>Passwordusu</th>
			<th>CORREO</th>
			<th>MATERIA</th>
			<th>USUARIO</th>
			<th>PERFIL</th>
			<th>ESTADO</th>
			<th>ACTUALIZAR</th>
			<th>ELIMINAR</th>

		</tr>
		<tbody>
			<?php

			require_once('../../Conexion.php');
			require_once('../modelos/docente.php');
			//crera el objeto para acceder a las funciones de la clase administrador
			$obj= new Docente();
			$datos= $obj-> getdoc();

			
			foreach($datos as $datos){
				?>
			<tr>
				<td><?php echo $datos['id_docente'];?></td>
				<td><?php echo $datos['Nombredoc'];?></td>
				<td><?php echo $datos['Apellidodoc'];?></td>
				<td><?php echo $datos['Documentodoc'];?></td>
				<td><?php echo $datos['Correodoc'];?></td>
				<td><?php echo $datos['Materia'];?></td>
				<td><?php echo $datos['Usuariodoc'];?></td>
				<td><?php echo $datos['Perfildoc'];?></td>
				<td><?php echo $datos['Estadodoc'];?></td>
				<td><a href="editar.php?Id=<?php echo $datos['id_docente']?>" style="color: #33077E;">Actualizar</a></td>
				<td><a href="eliminar.php?Id=<?php echo $datos['id_docente']?>" style="color: #33077E;
					">Eliminar</a></td>

			</tr>
		<?php } ?>
		</tbody>

	</table>

</div>

</div>
</body>
</html>
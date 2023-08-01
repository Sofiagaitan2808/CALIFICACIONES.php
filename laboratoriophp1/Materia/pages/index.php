<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>MATERIAS</title>
</head>
<body>

<div class="container">
<h1 style="color: #F69B89; text-align: center;">Listado de materias</h1>
<div col="col-aut-mt-5">
	<table class="table table-hover" style="background-color:#B07165">
		<tr>
			<th>id_materia</th>
			<th>Nombremate</th>
			

		</tr>
		<tbody>
			<?php

			require_once('../../Conexion.php');
			require_once('../modelos/materia.php');
			//crera el objeto para acceder a las funciones de la clase administrador
			$obj= new Docente();
			$datos= $obj-> getdoc();

			
			foreach($datos as $datos){
				?>
			<tr>
				<td><?php echo $datos['id_materia'];?></td>
				<td><?php echo $datos['Nombremate'];?></td>
				
				<td><a href="editar.php?Id=<?php echo $datos['id_materia']?>" style="color: #33077E;">Actualizar</a></td>
				<td><a href="eliminar.php?Id=<?php echo $datos['id_materia']?>" style="color: #33077E;
					">Eliminar</a></td>

			</tr>
		<?php } ?>
		</tbody>

	</table>

</div>

</div>
</body>
</html>
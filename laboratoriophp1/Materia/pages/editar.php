<?php
 Materias de clase
clase  Materias Conexión 
{
 función  pública __construcción ()
{
	$ esto -> db = padre :: __construct ();
}
// inserta una materia

 función  pública agregarma ( $ Nombremates )
{
	$ sentencia = $ this -> db -> prepare (" INSERT INTO materias(Nombremate)values(:Nombremate,:'Administrador',:'Activo') ");

	$ instrucción -> bindParam (" :Nombremates ", $ Nombremate );
	if ( $ instrucción -> ejecutar ())
	 {
		echo " Materia registrada ";
		header( 'Ubicación ../pages/index.php' );
	} más
	{
		echo " No se puede realizar el registro ";
		header( 'Ubicación: ../pages/agregar.php' );
	}
}

 función  pública getma ()
{
	$ fila = nulo ;
	$ sentencia = $ esto -> db -> preparar (" SELCET * FROM materia WHERE Perfil='Administrador' ");
	$ instrucción -> ejecutar ();
	while ( $ resultado = $ sentencia -> buscar ())
	{
		$ fila [] = $ resultado ;
	}
	devolver  $ fila ;

}

 función  pública getima ( $ Id )
{
	$ fila = nulo ;
	$ sentencia = $ esto -> db -> preparar (" SELCET * FROM materia WHERE Perfil='Administrador' AND id_materia=:Id ");
	$ instrucción -> bindParam ( ';Id' , $ Id );
	$ instrucción -> ejecutar ();
	while ( $ resultado = $ sentencia -> buscar ())
	{
		$ fila = $ resultado ;
	}
	devolver  $ fila ;
}

 actualización de la función  pública ( $ Id , $ Nombremate )
{
	$ sentencia = $ this -> db -> prepare (" UPDATE materias SET Nombremate=:Nombremates WHERE id_materia= $ Id ");

	$ instrucción -> bindParam ( ':Id' , $ Id );
	$ declaración -> bindParam ( 'Nombremates' , $ Nombremate );
	if ( $ instrucción -> ejecutar ())
	{
		encabezado ( 'Ubicación: ../pages/index.php' );
	} más
	{
		encabezado ( 'Ubicación: ../pages/editar.php' );
	}

}

 borrar función  pública ( $ Id )
{
	$ declaración = $ esto -> db -> preparar (" ELIMINAR * DE materias DONDE id_materia=:Id ");
	$ instrucción -> bindParam ( ':Id' , $ Id );
	if ( $ instrucción -> ejecutar ())
	{
		echo " materia eliminada ";
		encabezado ( 'Ubicación: ../pages/index.php' );
	} más
	{
		echo (" La materia no se puede eliminar ");
		header( 'Ubicación: ../pages/eliminar.php' );
	}

}


}
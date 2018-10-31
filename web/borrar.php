<!DOCTYPE html>
<html lang="es">

	<head>
		<title>Borrar empleado</title>
	</head>

	<body>
	<h1 align="center" style=background-color:#263238 ; color:#C2C2C2> Desea borrar el empleado¿?
		<right>
            <a href="/web/empleados.php">
            <img src="/web/pics/home.ico"></img>
            </a>
        </right>
    </h1>

    <p align="center">Si desea eliminar el usuario pulse tick y en caso contrario, para volver a la tabla y cancelarlo pulse la cross.</p>

	</body>

<table align=center cellpadding=5 cellspacing=5 class=list style=margin: 0 auto;> 
		<tr class=list style=background-color:#36463F>
			<td><a href="/web/empleados.php"><img src="/web/pics/tick.png"></img></a></td>
	        <td><a href="/web/empleados.php"><img src="/web/pics/cross.png"></img></a></td>
	    </tr>
</table>

	<?php

  // Conexión a la base de datos -----------------------------------------------

  // Realizamos la conexión a la base de datos
  require_once('functions.php');
  // Creamos un objeto para llamar a las consultas
  $qo = new empQueries();
  // Realizamos la conexión con la base de datos
  if(empty($qo->dbc)){
    echo "<h3>¡Error!: No se pudo establecer la conexión con la
    base de datos.</h3><br/>";
    die();
  }

//Entre cada foto de tick y cross debe de estar la funcion borrar para usarse en caso de pulsar la tick, y la vuelta a la tabla en caso de la cross.


//echo "  ";
	?>
</html>


<?php
function conectarse()
{
$server = "localhost";
$usuario = "root";
$pass = "";
$BD = "mysql";
//variable que guarda la conexión de la base de datos
$conexion = mysql_connect($server, $usuario, $pass);

// Seleccionar la BBDD
if (!mysql_select_db($BD)){
	return 2;
}

//Comprobamos si la conexión ha tenido exito
if($conexion)
{
	//echo 'La conexion de la base de datos se ha hecho satisfactoriamente<br>';
}
else
{
	echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>';
}
//devolvemos el objeto de conexión para usarlo en las consultas
return $conexion;
}
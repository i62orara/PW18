<?php
// Cargamos la librería de funciones
require ("funciones.php");

// Conexión a la BBDD a través de la función de la librería
$link=conectarse();


// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id_cliente']) && is_numeric($_GET['id_cliente']))
{
	// Valores pasados
	$id_cliente = $_GET["id_cliente"];
	
	// SQL Elimina la orden
	$process = "delete from Cliente where id_cliente = $id_cliente";
	
	// Acción
	$result = mysql_query($process, $link);
	// redirect back to the view page
	header("Location: menu-clientes.php");
}
else  // if id isn't set, or isn't valid, redirect back to view page
{
	header("Location: menu-clientes.php");
}
// Cierre de la BBDD
mysql_close($link);
?>
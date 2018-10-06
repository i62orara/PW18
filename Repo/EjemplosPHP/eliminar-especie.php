<?php
// Cargamos la librería de funciones
require ("funciones.php");

// Conexión a la BBDD a través de la función de la librería
$link=conectarse();


// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id_especie']) && is_numeric($_GET['id_especie']))
{
	// Valores pasados
	$id_especie = $_GET["id_especie"];
	
	// SQL Elimina la orden
	$process = "delete from Especie where id_especie = $id_especie";
	
	// Acción
	$result = mysql_query($process, $link);
	// redirect back to the view page
	header("Location: menu-especies.php");
}
else  // if id isn't set, or isn't valid, redirect back to view page
{
	header("Location: menu-especies.php");
}
// Cierre de la BBDD
mysql_close($link);
?>
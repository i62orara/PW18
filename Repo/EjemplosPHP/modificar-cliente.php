<?php include 'base.php' ?>

<?php startblock('main') ?>
<?php
// Cargamos la librería de funciones
require ("funciones.php");


$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$n_telefono = $_POST['n_telefono'];
$email = strip_tags($_POST['email']);

if (strlen($n_telefono) == 9 && $n_telefono>0)
{
	// Conexión a la BBDD
	$link=conectarse();
	
	// Fecha y Hora para todos los movimientos
	$tim = date("YmdHis");
	
	// Cadena de insercion campos que interviene
	$sql =        "update cliente set ";
	$sql = $sql . "nombre = '$nombre', ";
	$sql = $sql . "direccion = '$direccion', ";
	$sql = $sql . "n_telefono = $n_telefono, ";
	$sql = $sql . "email = '$email' ";
	$sql = $sql . "where id_cliente = $id_cliente ";
	//$sql = $sql . "and mvt_nmvto =".$mvt_nmvto;
	
	// Actualización de la orden de trabajo
	$result = mysql_query($sql, $link);
	
	// Cierre de la BBDD
	mysql_close($link);
	// redirect back to the view page
	header("Location: menu-clientes.php");
}
else 
{ 
	echo " 
	El <b>número de teléfono</b> debe ser válido (9 dígitos).<br/>
	<a href=\"javascript:history.go(-1)\">Volver</a>
	"; 
}
?>
<?php endblock() ?>
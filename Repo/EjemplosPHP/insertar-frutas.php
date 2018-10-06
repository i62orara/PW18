<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Añadiendo fruta</h2>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

$codigo_id = $_POST['codigo_id'];
$nombre_fruta = $_POST['nombre_fruta'];
$precio = $_POST['precio'];
$nombre_especie = $_POST['nombre_especie'];

// Conexión a la BBDD a través de la función de la librería
$link=conectarse();

$sql = "INSERT INTO `fruta` (`codigo_id`, `nombre_especie`, `precio`, `nombre_especie`) VALUES ($codigo_id, '$nombre_fruta', $precio, '$nombre_especie')";

$consulta="select * from Fruta where codigo_id=$codigo_id";
$resultado=mysql_query($consulta) or die (mysql_error());
if (mysql_num_rows($resultado)>0)
{
	echo "Esta fruta ya se encuentra registrada<br>";
} else {
	// Inserción de la orden de trabajo
	$result = mysql_query($sql, $link);
	echo "Fruta añadida correctamente<br>";
}

// Cierre de la BBDD
mysql_close($link);
echo "<a href=menu-frutas.php>Volver</a>";
?>

<?php endblock() ?>
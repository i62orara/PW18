<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Añadiendo especie</h2>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

$id_especie = $_POST['id_especie'];
$nombre_esp = $_POST['nombre_esp'];
$floracion = $_POST['floracion'];
$plantacion = $_POST['plantacion'];
$suelo = $_POST['suelo'];
$exposicion = $_POST['exposicion'];

// Conexión a la BBDD a través de la función de la librería
$link=conectarse();

$sql = "INSERT INTO `especie` (`id_especie`, `nombre_esp`, `floracion`, `plantacion`, `suelo`, `exposicion`) VALUES ($id_especie, '$nombre_esp', '$floracion', '$plantacion', '$suelo', $exposicion)";

$consulta="select * from Especie where id_especie=$id_especie";
$resultado=mysql_query($consulta) or die (mysql_error());
if (mysql_num_rows($resultado)>0)
{
	echo "Esta especie ya se encuentra registrada<br>";
} else {
	// Inserción de la orden de trabajo
	$result = mysql_query($sql, $link);
	echo "Especie registrada correctamente<br>";
}

// Cierre de la BBDD
mysql_close($link);
echo "<a href=menu-especies.php>Volver</a>";
?>

<?php endblock() ?>
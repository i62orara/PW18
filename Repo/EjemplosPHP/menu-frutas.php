<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de frutas</h2>
<p><a href="insertar-fruta.php">Insertar nueva fruta</a></p>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

// Conexión a la BBDD
$link=conectarse();

// Consulta del Numero de Registros total
//$process =           "select * from cliente as a, pedido as b ";
$process =           "select * from fruta";
//$process = $process ."where a.id_cliente = b.id_cliente ";
//$process = $process ."and a.id_cliente = 1 ";
$result = mysql_query($process, $link);

echo "<table border='0' cellpadding='10'>";
echo "<tr> <th>ID fruta</th> <th>Nombre fruta</th> <th>Especie</th> <th>Precio</th></tr>";
$count = 0;
// Bucle de Registros.
while($row = mysql_fetch_array($result)){
	if ($count%2 == 0)
		echo '<tr class="alt">';
	else
		echo '<tr>';
	echo '<td>'.$row["codigo_id"].'</td>';
	echo '<td>'.$row["nombre_fruta"].'</td>';
	echo '<td>'.$row["nombre_especie"].'</td>';
	echo '<td>'.$row["precio"].'</td>';
	echo '<td> <a href="modificar-fruta.php?id_fruta='.$row["codigo_id"].'"><img src=img/edit.png></a></td>';
	echo '<td> <a href="eliminar-fruta.php?id_fruta='.$row["codigo_id"].'"><img src=img/delete.png></a></td>';
	echo '</tr>';
	$count ++;
}
echo "</table>";

// Cierre de la BBDD
mysql_close();
?>
<?php endblock() ?>
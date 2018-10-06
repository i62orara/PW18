<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de especies</h2>
<p><a href="insertar-especi.php">Insertar nueva especie</a></p>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

// Conexión a la BBDD
$link=conectarse();

// Consulta del Numero de Registros total
//$process =           "select * from cliente as a, pedido as b ";
$process =           "select * from especie";
//$process = $process ."where a.id_cliente = b.id_cliente ";
//$process = $process ."and a.id_cliente = 1 ";
$result = mysql_query($process, $link);

echo "<table border='0' cellpadding='10'>";
echo "<tr> <th>ID especie</th> <th>Nombre especie</th> <th>Floración</th> <th>Plantación</th> <th>Suelo</th> <th>Tiempo exposición</th></tr>";
$count = 0;
// Bucle de Registros.
while($row = mysql_fetch_array($result)){
	if ($count%2 == 0)
		echo '<tr class="alt">';
	else
		echo '<tr>';
	echo '<td>'.$row["id_especie"].'</td>';
	echo '<td>'.$row["nombre_esp"].'</td>';
	echo '<td>'.$row["floracion"].'</td>';
	echo '<td>'.$row["plantacion"].'</td>';
	echo '<td>'.$row["suelo"].'</td>';
	echo '<td>'.$row["exposicion"].'</td>';
	echo '<td> <a href="modificar-especie.php?id_especie='.$row["id_especie"].'"><img src=img/edit.png></a></td>';
	echo '<td> <a href="eliminar-especie.php?id_especie='.$row["id_especie"].'"><img src=img/delete.png></a></td>';
	echo '</tr>';
	$count ++;
}
echo "</table>";

// Cierre de la BBDD
mysql_close();
?>
<?php endblock() ?>
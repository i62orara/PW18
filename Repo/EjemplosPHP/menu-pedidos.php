<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de pedidos</h2>
<p><a href="insertar-fruta.php">Añadir nuevo pedido</a></p>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

// Conexión a la BBDD
$link=conectarse();

// Consulta del Numero de Registros total
//$process =           "select * from cliente as a, pedido as b ";
$process =           "select * from pedido";
//$process = $process ."where a.id_cliente = b.id_cliente ";
//$process = $process ."and a.id_cliente = 1 ";
$result = mysql_query($process, $link);

echo "<table border='0' cellpadding='10'>";
echo "<tr> <th>ID pedido</th> <th>Fecha</th> <th>Importe</th> <th>Cliente</th></tr>";
$count = 0;
// Bucle de Registros.
while($row = mysql_fetch_array($result)){
	if ($count%2 == 0)
		echo '<tr class="alt">';
	else
		echo '<tr>';
	echo '<td>'.$row["id_pedido"].'</td>';
	echo '<td>'.$row["fecha"].'</td>';
	echo '<td>'.$row["importe"].'</td>';
	echo '<td>'.$row["id_cliente"].'</td>';
	echo '<td> <a href="modificar-pedido.php?id_pedido='.$row["id_pedido"].'"><img src=img/edit.png></a></td>';
	echo '<td> <a href="eliminar-pedido.php?id_pedido='.$row["id_pedido"].'"><img src=img/delete.png></a></td>';
	echo '</tr>';
	$count ++;
}
echo "</table>";

// Cierre de la BBDD
mysql_close();
?>
<?php endblock() ?>
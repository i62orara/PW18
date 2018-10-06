<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de clientes</h2>
<p><a href="insertar-client.php">Añadir un nuevo cliente</a></p>
<form action="consulta-cliente.php" method="post">
	<p>Nombre: </td><td><input required type="text" name="nombre" />
	<input type="submit" value="Buscar cliente"/></p>
</form>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

// Conexión a la BBDD
$link=conectarse();

// Consulta del Numero de Registros total
//$process =           "select * from cliente as a, pedido as b ";
$process =           "select * from cliente";
//$process = $process ."where a.id_cliente = b.id_cliente ";
//$process = $process ."and a.id_cliente = 1 ";
$result = mysql_query($process, $link);

echo "<table border='0' cellpadding='10'>";
echo "<tr> <th>Nombre</th> <th>DNI</th> <th>Dirección</th> <th>Nº teléfono</th> <th>email</th></tr>";
$count = 0;
// Bucle de Registros.
while($row = mysql_fetch_array($result)){
	if ($count%2 == 0)
		echo '<tr class="alt">';
	else
		echo '<tr>';
	echo '<td>'.$row["nombre"].'</td>';
	echo '<td>'.$row["id_cliente"].'</td>';
	echo '<td>'.$row["direccion"].'</td>';
	echo '<td>'.$row["n_telefono"].'</td>';
	echo '<td>'.$row["email"].'</td>';
	echo '<td> <a href="modificar-client.php?id_cliente='.$row["id_cliente"].'"><img src=img/edit.png></a></td>';
	echo '<td> <a href="eliminar-cliente.php?id_cliente='.$row["id_cliente"].' "onclick="return confirmar();"><img src=img/delete.png></a></td>';
	echo '</tr>';
	$count ++;
}
echo "</table>";

// Cierre de la BBDD
mysql_close();
?>
<?php endblock() ?>

<script>
function confirmar() {
    var r = confirm("¿Seguro que desea eliminar?");
    if (r == true) {
        return true;
    } else {
        return false;
    }
}
</script>
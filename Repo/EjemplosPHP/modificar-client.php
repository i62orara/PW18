<?php include 'base.php' ?>

<?php startblock('main') ?>
<?php
require ("funciones.php");
$link=conectarse();
$id_cliente = $_GET["id_cliente"];
$cliente = "select * from cliente as a where a.id_cliente = $id_cliente";
$result = mysql_query($cliente, $link);
$row = mysql_fetch_array($result);
?>
<h2>Gestión de clientes</h2>
<form action="modificar-cliente.php" method="post">
	<table border='0' cellpadding='10'>
	<tr>
	<td>DNI:</td><td><input required type="number" name="id_cliente" value="<?php echo $id_cliente;?>" readonly/></td>
	</tr>
	<tr>
	<td>Nombre:</td><td><input required type="text" name="nombre" value="<?php echo $row["nombre"];?>"/></td>
	</tr>
	<tr>
	<td>Dirección:</td><td><input required type="text" name="direccion" value="<?php echo $row["direccion"];?>"/></td>
	</tr>
	<tr>
	<td>Nº teléfono:</td><td><input required type="tel" name="n_telefono" value="<?php echo $row["n_telefono"];?>"/></td>
	</tr>
	<tr>
	<td>Email:</td><td><input required type="email" name="email" value="<?php echo $row["email"];?>"/></td>
	</tr>
	</table>
	<p><input type="reset" value="Deshacer cambios"/>
	<input type="submit" value="Guardar modificación"/></p>
	<p><a href="menu-clientes.php">Volver</a></p>
</form>
<?php
mysql_close();
?>
<?php endblock() ?>
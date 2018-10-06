<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de clientes</h2>
<form action="insertar-cliente.php" method="post">
	<table border='0' cellpadding='10'>
	<tr>
	<td>DNI:</td><td><input required type="number" name="id_cliente" /></td>
	</tr>
	<tr>
	<td>Nombre:</td><td><input required type="text" name="nombre" /></td>
	</tr>
	<tr>
	<td>Dirección:</td><td><input required type="text" name="direccion" /></td>
	</tr>
	<tr>
	<td>Nº teléfono:</td><td><input required type="tel" name="n_telefono" /></td>
	</tr>
	<tr>
	<td>Email:</td><td><input required type="email" name="email" /></td>
	</tr>
	</table>
	<p><input type="submit" value="Guardar cliente"/></p>
	<p><a href="menu-clientes.php">Volver</a></p>
</form>
<?php endblock() ?>
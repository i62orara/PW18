<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de frutas</h2>
<form action="insertar-frutas.php" method="post">
	<table border='0' cellpadding='10'>
	<tr>
	<td>ID fruta:</td><td><input required type="number" name="codigo_id" /></td>
	</tr>
	<tr>
	<td>Nombre fruta:</td><td><input required type="text" name="nombre_fruta" /></td>
	</tr>
	<tr>
	<td>Precio:</td><td><input required type="number" name="precio" /></td>
	</tr>
	<tr>
	<td>Nombre especie:</td><td><input required type="text" name="nombre_especie" /></td>
	</tr>
	</table>
	<p><input type="submit" value="Guardar fruta"/></p>
	<p><a href="menu-frutas.php">Volver</a></p>
</form>
<?php endblock() ?>
<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Gestión de especies</h2>
<form action="insertar-especie.php" method="post">
	<table border='0' cellpadding='10'>
	<tr>
	<td>ID especie:</td><td><input required type="text" name="id_especie" /></td>
	</tr>
	<tr>
	<td>Nombre especie:</td><td><input required type="text" name="nombre_esp" /></td>
	</tr>
	<tr>
	<td>Floración:</td>
	<td>
		<select size="1" name="floracion">
		<option selected value="primavera">primavera</option>
		<option value="verano">verano</option>
		<option value="otoño">otoño</option>
		<option value="invierno">invierno</option>
		</select>
	</td>
	<tr>
	<td>Plantación:</td>
	<td>
		<select size="1" name="plantacion">
		<option selected value="primavera">primavera</option>
		<option value="verano">verano</option>
		<option value="otoño">otoño</option>
		<option value="invierno">invierno</option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Suelo:</td>
	<td>
		<select size="1" name="suelo">
		<option selected value="húmedo">húmedo</option>
		<option value="seco">seco</option>
		<option value="muy seco">muy seco</option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Tiempo exposición:</td><td><input required type="number" name="exposicion" /></td>
	</tr>
	</table>
	<p><input type="submit" /></p>
	<p><a href="menu-especies.php">Volver</a></p>
</form>
<?php endblock() ?>
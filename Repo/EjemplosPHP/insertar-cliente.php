<?php include 'base.php' ?>

<?php startblock('main') ?>
<h2>Añadiendo cliente</h2>
<?php
// Cargamos la librería de funciones
require ("funciones.php");

$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$n_telefono = $_POST['n_telefono'];
$email = strip_tags($_POST['email']);

if (strlen($n_telefono) == 9 && $n_telefono>0)
	{
	// Conexión a la BBDD a través de la función de la librería
	$link=conectarse();

	$sql = "INSERT INTO `cliente` (`id_cliente`, `nombre`, `direccion`, `n_telefono`, `email`) VALUES ($id_cliente, '$nombre', '$direccion', $n_telefono, '$email')";

	$consulta="select * from Cliente where id_cliente=$id_cliente";
	$resultado=mysql_query($consulta) or die (mysql_error());
	if (mysql_num_rows($resultado)>0)
	{
		echo "Este usuario ya se encuentra registrado<br>";
	} else {
		// Inserción de la orden de trabajo
		$result = mysql_query($sql, $link);
		echo "Usuario registrado correctamente<br>";
	}

	// Cierre de la BBDD
	mysql_close($link);
	echo "<a href=menu-clientes.php>Volver</a>";

}
else 
{ 
	echo " 
	El <b>número de teléfono</b> debe ser válido (9 dígitos).<br/>
	<a href=\"javascript:history.go(-1)\">Volver</a>
	"; 
}
?>

<?php endblock() ?>
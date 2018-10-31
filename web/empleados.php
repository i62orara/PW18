<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Empleados</title>
    <!-- Para tildes y acentos -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body>

  <!--Se centra el titulo y se concatena con la imagen de la casa,(permite
  volver al menu de inicio) posicionandola al lado derecho-->
    <h1 align="center" style="background-color:#263238 ; color:#C2C2C2">
      Lista de empleados
      <right>
        <a href="index.php">
          <img src="pics\home.ico"></img>
        </a>
      </right>
    </h1>

<?php

  // Conexión a la base de datos -----------------------------------------------

  // Realizamos la conexión a la base de datos
  require_once('functions.php');
  // Creamos un objeto para llamar a las consultas
  $qo = new empQueries();
  // Realizamos la conexión con la base de datos
  if(empty($qo->dbc)){
    echo "<h3 align='center'>¡Error!: No se pudo establecer la conexión con la
    base de datos.</h3><br/>";
    die();
  }

  // Muestra de datos ----------------------------------------------------------

  // Creamos la estructura que debe de tener la tabla
echo "<h3 align=center> Listado completo de empleados </h3>
    <table align=center cellpadding=5 cellspacing=5 class=list style=margin: 0 auto;>
      <tr align=left class=list style=background-color:#36463F>
        <th class=list>Nombre </th>
        <th class=list>DNI </th>
        <th class=list>Email </th>
        <th class=lists>Detalles </th>
        <th class=list>Cambios </th>
      </tr>";

  // Realizamos una petición para obtener un array con todos los empleados
  $emps = $qo->getAllEmp();
  $urlEmp;
  // Mostramos todos y cada uno de los empleados
  foreach($emps as $emp){

    $urlEmp = 'detalles.php?dni=' . urlencode($emp["dni"]);
    
    echo "<tr align=left class=list style=background-color:#7C9188>
      <td class=list>$emp[nombreCompleto]</td>
      <td class=list>$emp[dni]</td>
      <td class=list>$emp[email]</td>
      <td class=list align=center><a href=$urlEmp>+ info</a></td>
      <td class=list align=center><a href=/web/borrar.php>Borrar</a></td>
      <td class=list algn=center><a href=>Editar</a></td>
      <td class=list algn=center><a href=>Modificar</a></td>
    </tr>";
  }

  echo "</table>"; // Cerramos la tabla (linea 33 - <table align="center"  ... )

  echo "Intsertar usuario <a href='insertar.php'>aqui</a>" 


?>

  </body>
</html>

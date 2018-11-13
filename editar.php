<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Editar empleado</title>
    <!-- Para tildes y acentos -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body bgcolor="#CFE1D6">

<h1 align="center" style="background-color:#263238 ; color:#C2C2C2">
        Datos del empleado
        <right>
            <a href="/web/empleados.php">
            <img src="/web/pics/home.ico"></img>
            </a>
        </right>
        </h1>

<?php

    $dni = $_GET['dni'];
    require_once('functions.php');
    // Creamos un objeto para llamar a las consultas
    $qo = new empQueries();
    // Realizamos la conexión con la base de datos
    if(empty($qo->dbc)){
    echo "<h3 align='center'>¡Error!: No se pudo establecer la conexión con la
    base de datos.</h3><br/>";
    die();
    }
    
    $emp = $qo->getEmp($dni);

?>

<form method="POST" action="guardarInsercion.php" align=center bgcolor=blue>

    <br>Nombre:<br>
        <input type="text" name="nombre" value="<?php echo $emp['nombreCompleto']?>" ><br>   
    
    <br>DNI<br>
        <input type="text" name="DNI" value="<?php echo "$emp[dni]" ?>" readonly><br>
        <br>
    
    <table align=center cellpadding="8" cellspacing="2" bgcolor="#BBD4C4">
    <tr bgcolor="#FFFFFF"> <caption> Sexo </caption> </tr>
       <td bgcolor="#FFFFFF"> <input type="radio" name="sexo" value="Hombre" <?php echo $qo->checkValues('sexo','Hombre',$emp) ?> > Hombre </td>
        <td bgcolor="#FFFFFF"> <input type="radio" name="sexo" value="Mujer" <?php echo $qo->checkValues('sexo','Mujer',$emp) ?> > Mujer </td>
        <td bgcolor="#FFFFFF"> <input type="radio" name="sexo" value="Otro"  <?php echo $qo->checkValues('sexo','Otro',$emp) ?> > Otro </td> 
    </table>
   
    
    <br>Estudios<br>
        <select name="estudios">
            <option value="Ninguno"> Ninguno </option>
            <option value="Basicos" selected> Basicos </option>
            <option value="Superiores"> Superiores </option>
            <option value="Doctorado"> Doctorado </option>
        </select><br><br>
    
    <table align=center cellpadding="8" cellspacing="2" bgcolor="#BBD4C4">
        <tr> <caption>Certificaciones</caption></tr>
        <tr>
            <td bgcolor="#FFFFFF"><input type="checkbox" name="cert0" >Amazon<br> </td>
            <td bgcolor="#FFFFFF"> <input type="checkbox" name="cert1" >Cisco<br> </td>
            <td bgcolor="#FFFFFF"> <input type="checkbox" name="cert2" >Linux<br> </td>
            <td bgcolor="#FFFFFF"> <input type="checkbox" name="cert3" >Java<br> </td>
            <td bgcolor="#FFFFFF"><input type="checkbox" name="cert4" >PL/SQL<br> </td>
            <td bgcolor="#FFFFFF"><input type="checkbox" name="cert5" >La otra<br> </td>
            <td bgcolor="#FFFFFF"><input type="checkbox" name="cert6" >..Y la que queda<br> </td>
        </tr>
    </table>

    
    <br>Situación laboral<br>
    <select name="sitLab">
            <option value="Estudiante"> Estudiante </option>
            <option value="Activo"> Activo </option>
            <option value="Parado"> Parado </option>
            <option value="Jubilado"> Jubilado </option>
    </select><br><br>
    
    <br>Email <br>
    <input type="email" name="correo" value=<?php echo $emp['email']?>><br>
    
    <br>Localidad<br>
    <select name="localidad">
            <option value="1"> Almeria </option>
            <option value="2"> Cadiz </option>
            <option value="3"> Cordoba </option>
            <option value="4"> Granada </option>
            <option value="5"> Sevilla </option>
    </select><br><br>
    
    <br>Fecha de nacimiento<br>
    <input type="date" name="fechaNacimiento" value=<?php echo $emp['fechaNacimiento']?> readonly><br>
    
    <br>Telefono<br>
    <input type="text" name="telefono" value = <?php echo $emp['telefono']?>><br>
    
    <br>
    <input type="submit" name="edicion" value="Guardar"> 
    <input type="reset" value="Restablecer">


</form>
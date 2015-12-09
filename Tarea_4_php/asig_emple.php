
<html>
<head>
 
    <title>EJEMPLO DE BASE DE DATOS</title>

</head>

<body>
    
    <?php
    
    $link = mysql_connect("localhost", "root", "", "talleresfaber")
    or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');

    
    $query = "SELECT CodEmpleado FROM EMPLEADOS";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    
    echo '<form method="post" action="asig_emple.php">';
    echo "<select name='CodEmpleado'>";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<option value='".$line['CodEmpleado']."'>".$line['CodEmpleado']."</option>";
    }
    echo '</select> Numero Empleado <br>';
    echo "<input type='hidden' name='IdReparacion' value='".$line['IdReparacion']."'><br>";
    echo '<input type="text" name="horas">  Horas<br><br>';
    echo '<input type="submit" name="enviar" value="Insertar">';
    echo '</form>';

    if (isset($_POST["enviar"])){
    $inse = "INSERT INTO intervienen VALUES   ('".$_POST['CodEmpleado']."','".$_POST['IdReparacion']."','".$_POST['horas']."')";
 $result = mysql_query($inse) or die('Consulta fallida: ' . mysql_error());
    header ("refresh:5; url=crear.php");
    }
      
    
         mysql_close($link);
    ?>
</body>
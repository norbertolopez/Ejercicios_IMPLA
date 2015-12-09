
<html>
<head>
   
    <title>EJEMPLO DE BASE DE DATOS</title>

</head>

<body>
    
    <?php
    // Conectando, seleccionando la base de datos
    $link = mysql_connect("localhost", "root", "", "talleresfaber")
    or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');

    // Realizar una consulta MySQL
    $query = "select recambios.IdRecambio, incluyen.IdRecambio, incluyen.IdReparacion from recambios join incluyen join reparaciones where recambios.idrecambio=incluyen.idrecambio and incluyen.idreparacion=reparaciones.idreparacion";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    
    echo '<form method="post" action="asig_pieza.php">';
    echo "<select name='IdRecambio'>";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<option value='".$line['IdRecambio']."'>".$line['IdRecambio']."</option>";
    }
    echo '</select>  Inserta Recambio <br>';
    echo "<input type='hidden' name='IdReparacion' value='".$line['IdReparacion']."'><br>";
    echo '<input type="text" name="unidades">  Unidades<br><br>';
    echo '<input type="submit" name="env" value="Insertar">';
    echo '</form>';

    if (isset($_POST["env"])){
    $query1 = "INSERT INTO INCLUYEN VALUES   ('".$_POST['IdRecambio']."','".$_POST['IdReparacion']."','".$_POST['unidades']."')";
 $result = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
    header ("refresh:5; url=crear.php");
    }
      
    
         mysql_close($link);
    ?>
</body>
</html>
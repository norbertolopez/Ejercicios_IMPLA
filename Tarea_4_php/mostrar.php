
<html >
<head>
    
    <title>EJEMPLO DE BASE DE DATOS</title>

</head>

<body>
    <?php
    // Conectando, seleccionando la base de datos
    $link = mysql_connect("localhost", "root", "", "talleresfaber")
    or die('No se pudo conectar: ' . mysql_error());
    echo 'Connected successfully';
    mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');

    // Realizar una consulta MySQL
    $query = "SELECT empleados.codempleado, empleados.nombre, empleados.apellidos, recambios.idrecambio, recambios.descripcion FROM empleados join intervienen join reparaciones join incluyen join recambios where empleados.codempleado=intervienen.codempleado and intervienen.idreparacion=reparaciones.idreparacion and reparaciones.idreparacion=incluyen.idreparacion and incluyen.idrecambio=recambios.idrecambio and reparaciones.IdReparacion='".$_GET['id']."';";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    


    // Imprimir los resultados en HTML
    echo "<table border='1px'>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    }

 $pieza = "SELECT incluyen.unidades, incluyen.idreparacion, incluyen.idrecambio FROM reparaciones join incluyen join recambios where reparaciones.idreparacion=incluyen.idreparacion and recambios.idrecambio=incluyen.idrecambio and reparaciones.IdReparacion='".$_GET['id']."';";

    $result = mysql_query($pieza) or die('Consulta fallida: ' . mysql_error());

 echo "<table border='1px'>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    }
         mysql_close($link);
        
    ?>
</body>
</html>
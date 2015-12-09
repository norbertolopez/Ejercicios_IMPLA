
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Borrar</title>

</head>

<body>
  
    <?php
    
    $link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
    echo 'Connected successfully';
    mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');
    
    
    $opcion1 = "DELETE FROM facturas where IdReparacion=".$_GET['id'];
    $result = mysql_query($opcion1) or die('Consulta fallida: ' . mysql_error());
    
    
    $opcion2 = "DELETE FROM intervienen where IdReparacion=".$_GET['id'];
    $result = mysql_query($opcion2) or die('Consulta fallida: ' . mysql_error());
    
    
    $opcion3 = "DELETE FROM incluyen where IdReparacion=".$_GET['id'];
    $result = mysql_query($opcion3) or die('Consulta fallida: ' . mysql_error());
    
      $opcion4 = "DELETE FROM reparaciones where IdReparacion=".$_GET['id'];
    $result = mysql_query($opcion4) or die('Consulta fallida: ' . mysql_error());
    
    
    mysql_close($link);
    header ("refresh:5; url=crear.php");
    
    
    
    
    
    
    ?>
    
    
</body>
</html>

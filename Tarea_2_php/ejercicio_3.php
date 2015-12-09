<html>
<head>
</head>
<body>      
    <?php
    $nombres=["roberto", "juan", "marta", "moria", "martin", "jorge", "miriam", "nahuel", "mirta"];
	$nombres_con_m = [];
 
$r = 0;
foreach ($nombres as $nombre) {
    if ($nombre[0] == 'm') {
        $nombres_con_m[$r] = $nombre;
        $r++;
    }
}
 
foreach ($nombres_con_m as $clave=>$valor) {
    echo $valor;
    if (count($nombres_con_m)-1 != $clave)
        echo ', ';
    else
        echo '.';
}
?>
</body>
</html>

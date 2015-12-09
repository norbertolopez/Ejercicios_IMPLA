<html>
<head>
    <title></title>
</head>

<body>
    
<?php

$dia=date("d");
if ($dia<=10) {
    echo "Sitio Activo Actualmente";
} else {
    echo "Sitio Fuera De Servicio Temporalmente";
}

?>

</body>
</html>

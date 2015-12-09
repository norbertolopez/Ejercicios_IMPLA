<html>
<head>
</head>
<body>
        <?php

		$v=["San Cristobal", "Cucuta", "Macaraibo", "Caracas"];

		echo "numero de elementos ".sizeof($v)."</br>";
    
		for($i=0;$i<sizeof($v);$i++){
			echo "Ciudad ".$i."</br>"."<h1>".$v[$i]."</h1>"."</br>";
		};
		echo "</br>";
        ?>
</body>
</html>

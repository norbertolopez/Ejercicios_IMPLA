<html>
<head>
</head>
<body>
	<?php
	
	$numeros = array (30, 4, 6, 17, 19, 12, 1, 5, 16, 11);
	$var = 0;
	 
	while ($var <= count($numeros)-1) {
	 
		if ($var == 0)
			$maximo = $numeros[0];
		else {
			if ($numeros[$var] > $maximo)
				$maximo = $numeros[$var];
		}
		$var++;
	}
	 
	echo 'El maximo es: ' . $maximo;
	 
	?>
</body>
</html>

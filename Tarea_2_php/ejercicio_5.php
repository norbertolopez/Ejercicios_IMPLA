<html>
<head>
</head>
<body>
<h2>Múltiplos de 77</h2>
<ol>
	<?php
	$var = [];
	$numero = 77;
		for ($i=0;$i<=10;$i++){
		$var[$i]=$numero*$i;
		echo "<li>"."<h3>".$var[$i]."</h3>"."</li>";
	};
	?>
</ol>
</body>
</html>

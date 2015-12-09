<html>
<head>
</head>
<body>
<style>
div {float: left}
img {width: 250px; height: 250px;
margin: 10px 10px 10px 10px;}
#parrafo1{color: orange}
#parrafo2{color: orange}
spam{color: black}
</style>
<?php

	$v2=array(
	array('id' => 0 ,'Nombre' => 'Mick', 'Apellidos' => 'Colangatta','Email' => 'fnning@gmail.com', 'Telefono' => 958674324 , 'imagen' => 'mick.jpg'),
	array('id' => 1 ,'Nombre' => 'Joel', 'Apellidos' => 'New Shouth Wales', 'Email' => 'p.parkinson@gmail.com', 'Telefono' => 657883421 , 'imagen' => 'joel.jpg'),
	array('id' => 2 ,'Nombre' => 'Julian', 'Apellidos' => 'Sidney', 'Email' => 'j.wilson.surf@gmail.com', 'Telefono' => 695843210 , 'imagen' => 'julian.jpg'),
	array('id' => 3 ,'Nombre' => 'Filipe', 'Apellidos' => 'Brasileiro', 'Email' => 'filiphino_77@gmail.com', 'Telefono' => 677894503 , 'imagen' => 'filipe.jpg'),
	array('id' => 4 ,'Nombre' => 'Owen', 'Apellidos' => 'Snnaper Rocks', 'Email' => 'owen_wright@gmail.com', 'Telefono' => 696654387 , 'imagen' => 'owen.jpg'),
	array('id' => 5 ,'Nombre' => 'Adriano', 'Apellidos' => 'Ovine Beach', 'Email' => 'souza_adriano@gmail.com', 'Telefono' => 657332398 , 'imagen' => 'adriano.jpg'),
	array('id' => 6 ,'Nombre' => 'John John', 'Apellidos' => 'Pipeline', 'Email' => 'jjflorence@gmail.com', 'Telefono' => 677834218 , 'imagen' => 'john.jpg'),
	array('id' => 7 ,'Nombre' => 'Kelly', 'Apellidos' => 'Cocoa Beach', 'Email' => 'sr_kelly@gmail.com', 'Telefono' => 697905034 , 'imagen' => 'kelly.jpg'),
	array('id' => 8 ,'Nombre' => 'Gabriel', 'Apellidos' => 'Maresias Beach', 'Email' => 'ggrip@gmail.com', 'Telefono' => 659839950 , 'imagen' => 'gabriel.jpg'),
	array('id' => 9 ,'Nombre' => 'Matt', 'Apellidos' => 'Duran bah', 'Email' => 'wilko_8@gmail.com', 'Telefono' => 668594022 , 'imagen' => 'matt.jpg'),
	);
	
	$datos=$v2[$_GET['id']];

 ?>
 <div>
	<img src="<?php echo $datos['imagen'];?>"/>
 </div>
 <div>
	 <h3><?php echo $datos['Nombre']." ".$datos['Apellidos'];?></h3>
	 <b>Contact Information</b>
	 <p id="parrafo1">Email<?php echo " "."<a  href=''>".$datos['Email']."</a>";?></p>
	 <p id="parrafo2">Phone<?php echo " "."<spam>".$datos['Telefono']."</spam>";?></p>
	 </br>
	 <p><a href="">StanfordWho listing</a></p>
	 <p><a href="">URL of this page</a></p>
</div>
</body>
</html>

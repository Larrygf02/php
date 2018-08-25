<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cars=array
		(
			array("Volvo",22,18),
			array("BMW",15,13),
			array("Mercedes Benz",5,2),
			array("Toyota",17,15)
		);
	echo $cars[0][0].": En Stock: ".$cars[0][1].", precio: ".$cars[0][2].".<br>";
	echo $cars[1][0].": En Stock: ".$cars[1][1].", precio: ".$cars[1][2].".<br>";
	echo $cars[2][0].": En Stock: ".$cars[2][1].", precio: ".$cars[2][2].".<br>";
	echo $cars[3][0].": En Stock: ".$cars[3][1].", precio: ".$cars[3][2].".<br>";
	for ($i=0; $i <4 ; $i++) {
		echo "<p><b>Fila numero $i</b></p>"; 
		echo "<ul>";
		for ($j=0; $j <3 ; $j++) { 
			echo "<li>".$cars[$i][$j]."</li>";
		}
		echo "</ul>";
	}

	?>
</body>
</html>
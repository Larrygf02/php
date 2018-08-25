<?php
	echo "Usado con for<br>";
	for ($i=0; $i <10 ; $i++) { 
		echo "El numero es : $i <br>";
	}
	echo "<br>Arreglos con foreach<br>";
	$colores=array("rojo","azul","verde","amarillo","rosado","celeste");
	foreach ($colores as $value) {
		echo "$value<br>";
	}
	
?>
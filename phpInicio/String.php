<?php
	$x="Hola mundo";
	echo strlen($x);//devuelve el numero de caracteres de la palabra
	echo "<br>";
	echo str_word_count($x);//devuelve el numero de palabras de una cadena
	echo "<br>";
	echo strrev($x);//devuelve el reverso de la palabra.
	echo "<br>";
	echo strpos($x, "mundo");
	echo "<br>";
	echo str_replace("mundo", "bri", $x);


?>

<?php
	//el metodo fopen tiene mas opciones que el metodo read file
	//r significa que el archivo sera de solo lectura
	echo "<h2>Diccionario.txt</h2><br>";
	$miarchivo=fopen("diccionario.txt", "r") or die("No se puede abrir el archivo");
	echo fread($miarchivo, filesize("diccionario.txt"));
	fclose($miarchivo);

	//fgets lee la primera linea del archivo
	$miarchivo2=fopen("diccionario.txt", "r") or die("No se pudo abrir el archivo");

	echo "<br><h2>fget devuelve la primera linea del texto</h2><br>";

	echo fgets($miarchivo2);
	fclose($miarchivo2);
	echo "<br><h2>Todo el archivo separado por lineas</h2><br>";
	
	$miarchivo3=fopen("diccionario.txt", "r") or die(" no se puede abrir el archivo");
	//salida de una linea hasta el final del archivo
	while (!feof($miarchivo3)) {
		echo fgets($miarchivo3)."<br>";
	}
	fclose($miarchivo3);
?>
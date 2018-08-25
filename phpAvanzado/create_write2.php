<?php
    //para escribir dentro de un archivo que tiene datos
	$miarchivo=fopen("test.txt", "w") or die ("No se puede crear el archivo");
	$txt="Monedas<br>";
	fwrite($miarchivo, $txt);
	$txt="tiene mario<br>";
	fwrite($miarchivo, $txt);
	fclose($miarchivo);
	//para abrir el nuevo archivo
	$archivo2=fopen("test.txt", "r");
	echo "<h2>Datos sobrescritos</h2><br>";
	echo fread($archivo2, filesize("test.txt"));




?>

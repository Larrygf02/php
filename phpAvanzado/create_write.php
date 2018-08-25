<?php
	echo "<h2>Creando un archivo txt</h2>";
	//la funcion fopen tambien se utiliza para crear archivos 
	//para eso le pasamos como segundo parametro w
	$miarchivo=fopen("test.txt", "w") or die("no se puede crear el archivo");
	$txt="John Doe<br>";
	fwrite($miarchivo, $txt);
	$txt="Jane Doe<br>";
	fwrite($miarchivo, $txt);
	fclose($miarchivo);
	//para leer el archivo
	$miarchivo2=fopen("test.txt","r") or die ("no se puede abrir el archivo");
	echo fread($miarchivo2, filesize("test.txt"));
	fclose($miarchivo2);
?>
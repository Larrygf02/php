<?php 
	//$archivo=fopen("bienvenidos.txt", "r");
if (!file_exists("bienvenidos.txt")) {
	die("Archivo no encontrado");
}else{
	$archivo=fopen("bienvenidos.txt", "r");
}
 ?>
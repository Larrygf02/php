<?php 
$xml=simplexml_load_file("libros.xml") or die( "Error: no se puede cargar el archivo");
echo $xml->libro[0]->titulo."<br>";
echo $xml->libro[1]->autor." ---> ";
echo $xml->libro[1]->titulo;
echo "<br>";
//como recorrer todos los datos con un loop
$xml2=simplexml_load_file("libros.xml") or die(" Error: no se puede cargar el archivo");
foreach ($xml2->children() as $libro) {
	echo $libro->titulo.", ";
	echo $libro->autor.", ";
	echo $libro->anio.", ";
	echo $libro->precio."<br> ";
}

//captura de datos segun la categoria
	$xml3=simplexml_load_file("libros.xml") or die(" Error: no se puede cargar el archivo");
	echo $xml3->libro[0]['categoria']."<br>";
	echo $xml3->libro[1]->titulo['lang'];

 ?>
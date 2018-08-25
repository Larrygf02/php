<?php 
 $myXMLData=
 	"<?xml version='1.0' encoding='UTF-8'?>
 	<note>
 	<to>Raul</to>
 	<from>Josue</from>
 	<heading>Cabecera</heading>
 	<body>No te olvides de esta semana</body>
 	</note>";

 	$xml=simplexml_load_string($myXMLData) or die("Error: no se puede crear el objeto xml");
 	print_r($xml);

 	 
 ?>
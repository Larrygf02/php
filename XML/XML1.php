<?php 
//con esto tenemos mas exactitud en el error
libxml_use_internal_errors(true);
	$myXMLData=
	"<?xml version='1.0' encoding='UTF-8'?>
	<document>
	<user>Raul</erroruser>
	<email>raullgf@hotmail.com</erroremail>
	</document>";

	$xml=simplexml_load_string($myXMLData);
	if ($xml===false) {
		echo "Falla cargando XML";
			foreach (libxml_get_errors() as $error) {
					echo "<br>",$error->message;
				}	
	}else{
		print_r($xml);
	}


 ?>
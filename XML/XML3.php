<?php 
	$xml=simplexml_load_file("nota.xml") or die("Error: no se puede crear el objeto");
	print_r($xml);
	echo "<br>";
	$xml2=simplexml_load_file("nota.xml") or die("Error: no se puede crear el obejot xml");
	echo $xml2->to."<br>";	
	echo $xml2->user."<br>";
	echo $xml2->heading."<br>";
	echo $xml2->cuerpo;
	
 ?>
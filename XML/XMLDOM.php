<?php 
	$xmlDoc=new DOMDocument();
	$xmlDoc->load("nota.xml");
	//imprimirlo en una cadena
	print $xmlDoc->saveXML();
	//imprimir elemento por elemento
	echo "<br>";
	$x=$xmlDoc->documentElement;
	foreach ($x->childNodes as $item) {
		print $item->nodeName. " = ".$item->nodeValue."<br>";
	}
 ?>
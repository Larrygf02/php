<?php 
	//inicializar el analizador xml
	$parser=xml_parser_create();

	function start($parser,$elemen_nombre,$elemen_atrib){
		switch ($elemen_nombre) {
			case "NOTE":
				echo "-- Note --<br>";
				break;
			case "TO":
				echo "To: ";
				break;
			case "USER":
				echo "User:";
				break;
			case "HEADING":
				echo "Heading:";
				break;
			case "CUERPO":
				echo "cuerpo:";
				break;	
		}
	}
	function stop($parser,$elemen_nombre){
		echo "<br>";
	}
	function char($parser,$data){
		echo $data;
	}
	//especificando un elemento
	xml_set_element_handler($parser,"start","stop");
	//especificando data handler
	xml_set_character_data_handler($parser,"char");
	//abriendo archivo xml
	$fp=fopen("nota.xml","r");

	//leendo informacion
	while ($data=fread($fp, 4096)) {
		xml_parse($parser,$data,feof($fp)) or die (sprintf("XML error: %s en linea %d",
			xml_error_string(xml_get_error_code($parser)),xml_get_current_line_number($parser)));
	}
	//liberamos memoria en el analizador
	xml_parser_free($parser);
 ?>
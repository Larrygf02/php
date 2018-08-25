<?php
	$color="verde";
	switch ($color) {
		case "rojo":
			echo "Mi color favorito es rojo";
			break;
		case "verde":
			echo "Mi color favorito es verde";
			break;
		case "azul":
			echo "Mi color favorito es azul";
			break;
		case "rosado":
			echo "Mi color favorito es rosado";
			break;	
		default:
			echo "Mi color favorito no es ni rojo, ni verde, ni azul, ni rosado";
			break;
	}
	echo "<br>";
	$numeros=1;
	switch ($numeros) {
		case 1:
			echo "El numero 1 es impar";
			break;
		case 2:
			echo "El numero 2 es par";
			break;
		case 3:
			echo "El numero 3 es impar";
			break;
		default:
			echo "El numero no es ni 1,ni 2, ni 3";
			break;
	}

?>
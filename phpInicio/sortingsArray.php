<?php
	$carros=array("Volvo","BMW","Toyota");
	//ordenamos ascendentemente el arreglo
	sort($carros);
	for($i=0;$i<count($carros);$i++){
		echo $carros[$i];
		echo "<br>";
	}
	echo "<br><h2>Ordenando numeros con sort</h2>";
	$numeros=array(2,4,1,10,3);
	sort($numeros);
	for ($i=0; $i <count($numeros) ; $i++) { 
		echo $numeros[$i]; 
		echo "<br>";
	}
	//ordenamos de formadescendente
	echo"<br><h2>Ordenando forma descendente con resort</h2>";
	rsort($numeros);
	for ($i=0; $i <count($numeros) ; $i++) { 
		echo $numeros[$i];
		echo "<br>";
	}
	

?>
<?php
	$carros=array("Volvo","Toyota","Nissan");
	echo "Me gusta ".$carros[0]." ".$carros[1]." ".$carros[2]." <br>";
	echo "<br><h2>Arreglos con for</h2>";
	$arrlength=count($carros);
	for ($i=0; $i <$arrlength ; $i++) { 
		echo $carros[$i];
		echo "<br>";
	}
	echo "<br><h2>Asociacion con arreglos</h2>";
	$edad=array("Peter"=>35,"Raul"=>22,"Brigitte"=>23);
	echo "Peter tiene " . $edad['Peter'] . " años.";
	echo "<br><h2>Recorrer Asociacion con foreach</h2>";
	foreach ($edad as $x => $value) {
		echo "Llave= ".$x.",Value= ".$value;
		echo "<br>";
	}

	$numeros=array(2,4,1,10,3);
	echo "<br><h2>Orndenando forma ascendente con el metodo de la burbuja</h2>";
	for ($i=0; $i <count($numeros)-1 ; $i++) { 
		for ($j=$i+1; $j <count($numeros) ; $j++) { 
			if($numeros[$i]>$numeros[$j]){
				$temp=$numeros[$i];
				$numeros[$i]=$numeros[$j];
				$numeros[$j]=$temp;
			}
		}
	}
	for ($i=0; $i <count($numeros) ; $i++) { 
		echo $numeros[$i];
		echo "<br>";
	}
	echo "<br><h2>Ordenando forma descendente con el metodo de la burbuja</h2>";
	for ($i=0; $i <count($numeros)-1 ; $i++) { 
		for ($j=$i+1; $j < count($numeros); $j++) { 
			if($numeros[$i]<$numeros[$j]){
				$temp=$numeros[$i];
				$numeros[$i]=$numeros[$j];
				$numeros[$j]=$temp;
			}
		}
	}
	for ($i=0; $i <count($numeros) ; $i++) { 
		echo $numeros[$i];
		echo "<br>";
	}
?>
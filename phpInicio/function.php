<?php
	function mensaje(){
		echo "Hola mundo";
	}
	mensaje();
	echo "<br>Una funcion con for<br>";
	function for1(){
		for ($i=0; $i <10 ; $i++) { 
		echo "El numero es : $i <br>";
		}
	}
	for1();
	echo "<br>Funcion con parametros<br>";
	function familia($name){
		echo "$name Larriega Gallegos.<br>";
	}
	familia("Raul Alfonso");
	familia("Yelitza Elena");
	familia("Delia Elena");
	echo "<br><h2>Funcion con dos parametros</h2><br>";
	function persona($name,$edad){
		echo "$name tiene $edad años.<br>";
	}
	persona("Jose",22);
	persona("Maria",22);
	persona("Raul",22);
	persona("Bri",23);
	echo "<br><h2>Funcion con parametro predeterminado</h2><br>";
	function peso($peso=50){
		echo "Su peso es : $peso <br>";
	}
	peso(350);
	peso();//en esta parte usara el parametro predeterminado
	peso(20);
	echo "<br><h2>Funcion retornando variables</h2><br>";
	function sum($x,$y){
		$z=$x+$y;
		return $z;
	}
	echo "5+10= ".sum(5,10)."<br>";
	echo "4+19= ".sum(4,19)."<br>";
	echo "2+2= ".sum(2,2)."<br>";
		

?>	
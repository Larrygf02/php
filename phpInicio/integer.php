<?php
	$x=5494.3;
	//la funcion var_dump() devuelve el tipo de dato
	var_dump($x);
	//variable booleana
	$y=true;
	echo "<br>";
	var_dump($y);
	//variable tipo array
	$cars = array("Volvo","BMW","Toyota");
	echo "<br>";
	var_dump($cars);
	echo "<br>";
	
	class Car
	{
		
		function Car()
		{
			$this->model="VW";
		}
	}
	//creando un objeto
	$herbie=new Car();
	//mostrando propiedades del objeto
	echo $herbie->model;
	echo "<br>";	
	$z="Hola mundo";
	var_dump($herbie);
	echo "<br>";
	var_dump($z);
?>
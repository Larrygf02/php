<?php
	$x=5;//variable global
	$y=10;
	//Una variable global no puede ser accedida atraves de una funcion
	function myTest(){
		//generera un error
		echo "<p>Variable x en esta funcion es ".$GLOBALS['x']."</p>";
	}
	myTest();
	echo"<p>La variable fuera de la funcion es $x</p>";

	function myTest2() {
    	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	} 
	myTest2();
	echo $y; // outputs 15
?>
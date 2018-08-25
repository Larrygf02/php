<?php
	define("Green", "verde",true);
	
	echo "<br>";
	function myTest() {
    echo Green;    
	}
	define("Blue","azul",true);
	function mycolor(){
		echo Blue;
	}
	myTest();
	echo "<br>";
	mycolor();
?>
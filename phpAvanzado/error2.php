<?php 
	//funcion de controlador de error
	function customError($errno,$errstr){
		echo "<b>Error:</b> [$errno] $errstr";
	}
	//colocar controlador de error
	set_error_handler("customError");
	//trigger Error
	echo $test;
 ?>

 <?php 
 $test=2;
 if ($test>1) {
 	trigger_error("El valor debe ser de 1 o por debajo");
 }
  ?>
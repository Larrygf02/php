<?php 
	//creando una funcion con excepcion
	function validarnum($num){
		if ($num>1) {
			throw new Exception("El valor de ser 1 o menor");
		}

	}
	try {
		validarnum(1);
		echo "Si ves esto, el número es 1 o por debajo";
	} catch (Exception $e) {
		echo "mensaje: ".$e->getMessage();
	}
 ?>
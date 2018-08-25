<?php 
	//creando una funcion con una excepcion
function validarnum($num){
	if ($num>1) {
		throw new  Exception("El valor debe ser 1 o debajo");
	}
	return true;
}
//trigger excepcion
validarnum(2);

 ?>
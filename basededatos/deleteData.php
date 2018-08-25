<?php 
	$servidor="localhost";
	$usuario="root";
	$passwprd="";
	$db="mydb";

	$con= new mysqli($servidor,$usuario,$passwprd,$db);

	if($con->connect_error){
		die("conexion fallo: ".$con->connect_error);
	}
	$sql="DELETE FROM usuario WHERE id=3";
	

	if ($con->query($sql)===TRUE) {
		echo "Registro eliminado";
	}else{
		echo "Error a eliminar el registro: ".$con->error;
	}
	$con->close();
 ?>
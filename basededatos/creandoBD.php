<?php 
	$servidor="localhost";
	$usuario="root";
	$password="";
	//creando la conexion
	$con=new mysqli($servidor,$usuario,$password);
	//verificando conexion
	if ($con->connect_error) {
		die("Connecion fallo: ".$con->connect_error);
	}
	//creando BD
	$sql="create database myDB";
	if ($con->query($sql)===TRUE) {
		echo "Base de datos creado correctamente";
	}else{
		echo "Error al crear base de datos: ".$con->error;
	}
 ?>
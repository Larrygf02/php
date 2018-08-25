<?php 
$servidor="localhost";
$usuario="root";
$password="";
$db="myDB";
//creando la conexion
$con=new mysqli($servidor,$usuario,$password,$db);
//verifando la conexion
if ($con->connect_error) {
	die("Conexion fallo: "-$con->connect_error);
}
//sql creando tabla
$sql="CREATE TABLE usuario (
	 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	 nombre VARCHAR(30) NOT NULL,
	 apellido VARCHAR(30) NOT NULL,
	 email VARCHAR(50),
	 fecha TIMESTAMP
	 )";
	if ($con->query($sql)===TRUE) {
		echo "tabla usuario ha sido creada con exito";
	}else{
		echo "Error a crear tabla: ".$con->error;
	}

 ?>
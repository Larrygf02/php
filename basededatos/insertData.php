<?php 
	$servidor="localhost";
	$usuario="root";
	$password="";
	$db="myDB";
	//creando la conexion
	$con=new mysqli($servidor,$usuario,$password,$db);
	//verificando la conexion
	if ($con->connect_error) {
		die("Conexion fallo: ".$con->connect_error);
	}
	$sql="Insert INTO usuario VALUES (NULL,'Raul','Larriega',
		'raulgf_02@hotmail.com','93-09-02 00:00:00')";
	if ($con->query($sql)===TRUE) {
		echo "Nuevo registro creado";
	}else{
		echo "Error: ".$sql."<br>".$con->error;
	}
	$con->close();
 ?>
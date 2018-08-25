<?php 
	$servidor="localhost";
	$usuario="root";
	$password="";
	$db="myDB";
	//creando conexion
	$con=new mysqli($servidor,$usuario,$password,$db);
	//verificando conexion
	if ($con->connect_error) {
		die("conexion fallo: ".$con->connect_error);
	}
	$sql="Insert INTO usuario VALUES (NULL,'Raul','Larriega',
		'raulgf_02@hotmail.com','93-09-02 00:00:00')";
	if ($con->query($sql)===TRUE) {
		$last_id=$con->insert_id;
		echo "Nuevo registro creado ".$last_id;
	}else{
		echo "Error: ".$sql."<br>".$con->error;
	}
	$con->close();
 ?>
<?php 
	$servidor="localhost";
	$usuario="root";
	$password="";
	$db="mydb";

	$con=new mysqli($servidor,$usuario,$password,$db);

	if($con->connect_error){
		die("Conexion fallo:".$con->connect_error);
	}
	$stmt=$con->prepare("INSERT INTO usuario (id,nombre,apellido,email,fecha) VALUES (?,?,?,?,?)");
	$stmt->bind_param($id,$nombre,$apellido,$email,$fecha);

	$id="4";
	$nombre="jose";
	$apellido="gallegos";
	$email="jose@hotmail.com";
	$fecha="93-09-02 00:00:00";
	$stmt->execute();

	$id="5";
	$nombre="antonio";
	$apellido="garcia";
	$email="antonio@hotmail.com";
	$fecha="94-03-03 00:00:00";
	$stmt->execute();

	$id="6";
	$nombre="miguel";
	$apellido="izaguirre";
	$email="miguel@hotmail.com";
	$fecha="96-04-02 00:00:00";
	$stmt->execute();

	echo "nuevos records creados satisfactoriamente";
 ?>
<?php 
	$servidor="localhost";
	$usuario="root";
	$password="";
	$db="mydb";

	$con= new mysqli($servidor,$usuario,$password,$db);

	if($con->connect_error){
		die("conexion fallo: ".$con->connect_error);
	}
	$sql="SELECT id,nombre,apellido FROM usuario";
	$resultado=$con->query($sql);

	if ($resultado->num_rows>0) {
		while ($fila=$resultado->fetch_assoc()) {
			echo "id: ".$fila["id"]." nombre: ".$fila["nombre"]." ".$fila["apellido"]."<br>";
		}
	}else{
		echo " 0 resultados";
	}
	$con->close();
 ?>
<html>
<head>
	<title>Validacion de datos</title>
</head>
<body>
	<?php
	//define las variables y los coloca vacios
	$nombre=$email=$comentario=$web=$sexo="";
	//primero comprobamos que el metodo utilizado es POST
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $nombre=test_input($_POST["nombre"]);
	   $email=test_input($_POST["email"]);
	   $web=test_input($_POST["web"]);
	   $comentario=test_input($_POST["comentario"]);
	   $sexo=test_input($_POST["sexo"]);
	}
	function test_input($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	?>
	<h2>PHP Validacion de datos </h2>
	<!-- Pasamos los datos con el metodo post -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<!-- Los PHP_SELF es una variable muy global que devuelve el nombre
	del archivo del script que se esta ejecutando -->	
	Nombre: <input type="text" name="nombre"><br><br>
	Email: <input type="text" name="email"><br><br>
	Sitio web: <input type="text" name="web"><br><br>
	Comentario: <textarea name="comentario" rows="5" cols="40"></textarea><br><br>
	sexo:
	<input type="radio" name="sexo" value="femenino">Femenino
	<input type="radio" name="sexo" value="masculino">Masculino
	<br><br>
	<input type="submit" name="submit" value="Submit">
	</form>

			<?php
		echo "<h2>Tu datos son:<h2>";
		echo $nombre;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $comentario;
		echo "<br>";
		echo $web;
		echo "<br>";
		echo $sexo;


	?>

</body>
</html>
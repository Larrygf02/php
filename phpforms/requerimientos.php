<html>
<head>
	<title>Validacion de datos</title>
	<style>
	.error {color: #FF0000;}
	</style>
</head>
<body>
	<?php
	//define las variables y los coloca vacios
	$nombre=$email=$comentario=$web=$sexo="";
	$nombreErr=$emailErr=$sexoErr=$webErr="";
	//primero comprobamos que el metodo utilizado es POST
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["nombre"])){
			$nombreErr="Nombre es requerido";
		}else{
			$nombre=test_input($_POST["nombre"]);
			//comprobar si el nombre tiene solo letras y espacios en blanco
			if(!preg_match("/^[a-zA-Z]*$/",$nombre))
			$nombreErr="Solo letras y el espacio en blanco permitido";	
		}
	   if(empty($_POST["email"])){
			$emailErr="Email es requerido";
		}else{
			$email=test_input($_POST["email"]);
			//verifica si el email tiene formato
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$emailErr="Formato de correo invalido";
			}
		}
		if(empty($_POST["web"])){
			$web=" ";
		}else{
			$web=test_input($_POST["web"]);
			//comprueba que la sintaxis de la URL es valida
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
      			$webErr = " URL invalido"; 
    		}
		}
	   if(empty($_POST["comentario"])){
			$comentarioErr=" ";
		}else{
			$comentario=test_input($_POST["comentario"]);
		}
	   if(empty($_POST["sexo"])){
			$sexoErr="Sexo es requerido";
		}else{
			$sexo=test_input($_POST["sexo"]);
		}
	  
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
	<!-- reportaremos el error usando el tag "span" -->	
	Nombre: <input type="text" name="nombre">
	<span class="error">*<?php echo $nombreErr;?></span>
	<br><br>
	Email: <input type="text" name="email">
	<span class="error">*<?php echo $emailErr;?></span>
	<br><br>
	Sitio web: <input type="text" name="web">
	<span class="error"><?php echo $webErr;?></span>
	<br><br>
	Comentario: <textarea name="comentario" rows="5" cols="40"></textarea><br><br>
	sexo:
	<input type="radio" name="sexo" 
	<?php if(isset($sexo) && $sexo=="Femenino") echo "checked";?> 
	value="femenino">Femenino
	<input type="radio" name="sexo" 
	<?php if(isset($sexo) && $sexo=="Masculino") echo "checked"; ?>
	value="masculino">Masculino
	<span class="error">*<?php echo $sexoErr;?></span>
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
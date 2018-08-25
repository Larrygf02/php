	<!DOCTYPE html>
	<!--IMPORTANTE el setcookie debe ir antes del tag html-->
	<?php
	//un cookie se utiliza para identificar a un usuario
	//cada vez que el mismo equipo solicita una pagina con 
	//un navegador se enviara la cookie tambien.
	$cookie_nombre="usuario";
	$cookie_valor="Raul Larriega";
	/*crear cookie sentencia setcookie()
	86400=1 dia en segundos, 30 dias que durara el cookie
	seria 86400*30
  	el "/" significa que estara disponible en la web
  	*/
	setcookie($cookie_nombre,$cookie_valor,time()+(86400*30),"/");
	?>
	<html>
	<head>
		<title>Cookie</title>
	</head>
	<body>
		<?php
			if(!isset($_COOKIE[$cookie_nombre])){
		echo "Cookie nombre '".$cookie_nombre."'no esta colocado";
		}else{
		echo "Cookie'".$cookie_nombre."'es colocado!<br>";
		echo "Valor es: ".$_COOKIE[$cookie_nombre];
		}

		?>
		<p>Nota:Pueda que tenga que recargar la pagina para ver el valor del cookie</p>
	</body>
	</html>
	
	


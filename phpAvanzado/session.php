<?php 
	//comenzar una session
	session_start();
 ?>

 <html>
 <head>
 	<title>Session</title>
 </head>
 <body>
 	<?php 
 	//establece las variables de sesion
 	//$_SESSION["colorfav"]="azul";
 	$_SESSION["animalfav"]="mono";
 	$_SESSION["colorfav"]="verde";

 	echo "SE establecen las variables de sesion";
 	 ?>
 	 
 </body>
 </html>
<?php 
	session_start();
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 
 		//Variables de sesion que establecemos en la pagina anterior
 		echo "Color favorito es: ".$_SESSION["colorfav"]."<br>";
 		echo "Animal favorito es: ".$_SESSION["animalfav"]."<br>";
 	 ?>
 	 <?php 
 	 //otra manera de mostrar las variables de sesion
 	  print_r($_SESSION);
 	  echo "<br>";
 	  ?>
 	  <?php 
 	  //cambiando de variable
 	  $_SESSION["colorfav"]="amarillo";
 	  print_r($_SESSION);
 	  echo "<br>";
 	   ?>
 	   <?php 
 	   //eliminar todas las variables de la sesion
 	   session_unset();
 	   //eliminar la sancion
 	   session_destroy();
 	   echo "Todas las variables de sesion han sido removidos ";
 	    ?>
 </body>
 </html>
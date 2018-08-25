<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$int=100;
		//valida si la variable es entero o no 
		if (!filter_var($int,FILTER_VALIDATE_INT)===false) {
			echo ("Entero es valido");
		}else{
			echo ("Entero no es valido");
		}
	 ?>
	 <br> 
	 <?php 
	 	$int=0;
	 	//validamos para que el 0 tnbn sea entero
	 	if(filter_var($int,FILTER_VALIDATE_INT)===0 || 
	 		!filter_var($int,FILTER_VALIDATE_INT)===false){
	 		echo "Entero es valido";
	 	}else{
	 		echo "Entero no es valido";
	 	}
	  ?>
	  <br>
	  <p>Validar email</p>
	  <?php 
	  	$email="raulgf_02@hotmail.com";
	  	//elimina todos los caracteres ilegales de un email
	  	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	  	//valir email
	  	if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false){
	  		echo "$email es valido";
	  	}else{
	  		echo "$email es invalido";
	  	}
	   ?>
	   <br>
	   <p>Validar URL</p>
	   <?php  
	   		$url="http://www.w3schools.com";
	   		//elimina todos los caracteres ilegales
	   		$url=filter_var($url,FILTER_SANITIZE_URL);
	   		//validar URL
	   		$url=filter_var($url,FILTER_VALIDATE_URL);
	   			if (!filter_var($url,FILTER_VALIDATE_URL)===false) {
	   				echo "$url es un URL valido";
	   			}else{
	   				echo "$url no es un URL valido";
	   			}

	   ?>
</body>
</html>
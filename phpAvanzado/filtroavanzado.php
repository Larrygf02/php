<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$int=122;
		$min=1;
		$max=200;

		if (filter_var($int,FILTER_VALIDATE_INT,array("options" =>
			array("min_rango"=>$min,"max_rango"=>$max)))===false) {
				echo ("Valor de la variable no esta dentro del rango legal");			
		}else{
			echo "Valor de la variable esta dentro del rango legal";
		}
	 ?>
	 <br>
	 <?php 
	 	$ip="192.168.1.34";
	 	//validar si ip es valido o no
	 	if(filter_var($ip,FILTER_VALIDATE_IP)===false){
	 		echo "$ip no es un ip valido";
	 	}else{
	 		echo "$ip es un ip valido";
	 	}
	  ?>
	  <br>
	  <?php 
	  	$url="http://www.w3schools.com";
	  	if (!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false) {

	  		echo "$url es un URL valido";
	  	}else{
	  		echo "$url no es un URL valido";
	  	}
	   ?>	
</body>
</html>
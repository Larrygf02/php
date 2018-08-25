<html>
<head>
	<title></title>
</head>
<body>
	<p>La funcion "filter_var()" elimina la etiquetas HTML de una cadena</p>
	<?php 
		$str="<h1>Hola mundo</h1>";
		$nuevostr=filter_var($str,FILTER_SANITIZE_STRING);
		echo $nuevostr;
	 ?>
</body>
</html>
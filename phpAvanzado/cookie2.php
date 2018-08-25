<!DOCTYPE>
<?php
	/*para eliminar un 
	cookie utilizamos setcookie() con una fecha de caducidad en el pasadp
	*/
	setcookie("usuario","",time()-3600);
?>	
 <html>
<head>
	<title>Borrar cookie</title>
</head>
<body>
	<?php 
		echo "Cookie 'usuario' ha sido eliminado ";
	 ?>
</body>
</html>
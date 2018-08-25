<?php 
	setcookie("test_cookie","test",time()+3600,"/");

 ?>
<html>
<head>
	<title>Cookies habilitadas</title>
</head>
<body>
	<h3>Comprobamos si las cookies estan habilitadas</h3>
	<?php 
		if (count($_COOKIE>0)) {
			echo "Cookies estan habilitadas";
		}else{
			echo "Cookies estan deshabilitadas";
		}
	 ?>
</body>
</html>
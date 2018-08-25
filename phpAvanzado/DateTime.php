<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "Hoy es ".date("Y/m/d")."<br>";
		echo "Hoy es ".date("Y.m.d")."<br>";
		echo "Hoy es ".date("Y-m-d")."<br>";
		echo "Hoy es ".date("l")."<br>";
		//se utiliza la funcion date_default_timezone_set para 
		//poner la hora en nuestra zona horaria
		date_default_timezone_set("America/Lima");
		echo "la hora es ".date("h:i:sa")."<br>";
		//la funcion mktime especifa una hora determinada 
		//si no se especifica entonces se pone la hora y fecha actual
		echo "<h2> Ejemplos con mktime </h2>";
		$d=mktime(11,14,54,8,12,2014);
		echo "Hora creada es :".date("Y-m-d h:i:sa",$d)."<br>";
		//si queremos poner la fecha y hora actual entonces ya 
		//solo le pasamos el formato como parametro
		echo "la hora y fecha actual es: ".date("Y-m-d h:i:sa")."<br>";

		$e=strtotime("10:30 pm April 15 2015");
		echo "la hora creada es : ".date("Y-m-d h:i:sa",$e) ."<br>";
		echo "<h2> Ejemplos con strtotime </h2>";
		$e=strtotime("tomorrow");
		echo date("Y-m-d h:i:sa",$e)."<br>";
		$e=strtotime("next Saturday");
		echo date("Y-m-d h:i:sa",$e)."<br>";
		$e=strtotime("+3 Months");
		echo date("Y-m-d h:i:sa",$e)."<br>";
		$e=strtotime("yesterday");
		echo date("Y-m-d h:i:sa",$e)."<br>";

		//ejemplo para mostrar los siguientes sabados durantes 6 sabados
		echo "<h2>Los proximos seis sabados</h2>";
		$fechacomienzo=strtotime("Saturday");
		$fechafin=strtotime("+6 weeks",$fechacomienzo);
		while ($fechacomienzo<$fechafin) {
				echo date("M d",$fechacomienzo)."<br>";
				$fechacomienzo=strtotime("+1 week",$fechacomienzo);
			}
		echo "<br>";
		echo "<h2>Los proximos 6 dias comenzando del viernes</h2>";
		$fechacomienzo=strtotime("Friday");
		$fechafin=strtotime("+6 days",$fechacomienzo);
		while ($fechacomienzo<$fechafin) {
					echo date("M d",$fechacomienzo)."<br>";
					$fechacomienzo=strtotime("+1 day",$fechacomienzo);
				}
		echo "<br>";
		echo "<h2>Generando el numero de dias hasta el 4 de julio</h2>";
		$d1=strtotime("July 04");
		$d2=ceil(($d1-time())/60/60/24);
		echo "Hay ".$d2." dias hasta el 4 de julio ";
		echo "<br>";

	?>
	<!-- la funcion date devuelve la fecha actual -->

	© 2010-<?php echo date("Y");?>

</body>
</html>
<html>
<head>
	<style>
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table, td,th{
			border: 1px solid;
			padding: 5px;
		}
		th{
			text-align: :left;
		}
	</style>
	
</head>
<body>
	<?php 
		$q=intval($_GET['q']);
		//creando la conexion
		$con=mysqli_connect('localhost','root','','mydb');
		if (!$con) {
			die ("no se puede conectar con la base de datos").mysqli_error($con);
		}
		mysqli_select_db($con,"mydb");
		$sql="SELECT * FROM user WHERE id='".$q."' ";
		$result=mysqli_query($con,$sql);
		echo "<table>
				 <tr>
	 	<th>Nombre</th>
	 	<th>Apellido</th>
	 	<th>Edad</th>
	 	<th>Ciudad</th>
	 	<th>Trabajo</th>
	 </tr>";
	 	while ($row=mysqli_fetch_array($result)) {
	 		echo "<tr>";
	 		echo "<td>".$row['nombre']."</td>";
	 		echo "<td>".$row['apellido']."</td>";
	 		echo "<td>".$row['edad']."</td>";
	 		echo "<td>".$row['ciudad']."</td>";
	 		echo "<td>".$row['trabajo']."</td>";
	 		echo "</tr>";
	 	}
	 	echo "</table>";
	 	mysqli_close($con);
	 ?>	 
	
</body>
</html>
<html>
<head>
	<style>
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td{
			padding: 5px;
		}
	</style>
	<title>Filtros</title>
</head>
<body>
	<table>
		<tr>
			<td>Filtro Nombre</td>
			<td>Fitro id</td>
		</tr>	
		<?php 
		    //la funcion filter_list() se puede 
		//utilizar para enumerar lo que ofrece 
		//la extension de filtro php
			foreach (filter_list() as $id => $filter) {
				echo '<tr><td>'. $filter. '</td><td>'.filter_id($filter).
				'</td></tr>';
			}
		 ?>
	</table>	
</body>
</html>
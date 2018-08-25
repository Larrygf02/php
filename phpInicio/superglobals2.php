<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname">
	<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST['fname'];
	//recolectar valor de campo de entrada
	if(empty($name)){
		echo "el nombre esta vacio";
	}else{
		echo $name;
	}
}

?>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>

</html>
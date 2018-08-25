<html>
<head>
	<title></title>
	<script>
		function conseguirVoto(int){
			if (window.XMLHttpRequest) {
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
			 	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			 		document.getElementById("txt").innerHTML=xmlhttp.responseText;
			 	}
			}
			xmlhttp.open("GET","pool.php?vote="+int,true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<div id="txt">
		<h3>Te gusta el PHP y el ajax hasta ahora</h3>
		<form>
			Si:
			<input type="radio" name="vote" value="0" onclick="conseguirVoto(this.value)">
			<br>No:
			<input type="radio" name="vote" value="1" onclick="conseguirVoto(this.value)">

		</form>

	</div>
</body>
</html>
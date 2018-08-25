
<html>
<head>
	<title>AJAX DATABASE</title>
	<script>
		function showUser(str){
			if(str==""){
				document.getElementById("txt").innerHTML="";
				return;
			}else{
				if (window.XMLHttpRequest) {
					//codigo usado para IE7+,Firefox,Chrome,Opera,Safari
					xmlhttp=new XMLHttpRequest();
				}else{
					//codigo usador para IE6,IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");	
				}
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 &&  xmlhttp.status==200) {
						document.getElementById("txt").innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET","usuario.php?q="+str,true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<form>
		<select name="usuario" onchange="showUser(this.value)">
			<option value="">Seleccionar una persona:</option>
			<option value="1">Peter</option>	
			<option value="2">Luis</option>
			<option value="3">Juan</option>
			<option value="4">Mario</option>
		</select>
	</form>
	<br>
	<div id="txt"><b>Informacion de la persona..</b></div>
</body>
</html>

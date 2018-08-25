<html>
<head>
	<title></title>
	<script>
		function showCd(str){
			if (str =="") {
				document.getElementById("txt").innerHTML="";
				return;
			}
			if(window.XMLHttpRequest){
				//codigo para firefox chrome
				xmlhttp=new XMLHttpRequest();
			}else{
				//codigo para IE6,IE7
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("txt").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","conseguircd.php?q="+str,true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<form>
		Seleccionar Cd:
		<select name="cds" onchange="showCd(this.value)">
		<option value="">Seleccionar cd:</option>
		<option value="Bob Dylan">Bob Dylan</option>
		<option value="Bee Gees">Bee Gees</option>
		<option value="Cat Stevens">Cat Stevens</option>

		</select>
	</form>
	<div id="txt"><b>Informacion del CD aqui...</b></div>
</body>
</html>
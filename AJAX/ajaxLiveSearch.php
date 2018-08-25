<html>
<head>
	<title></title>
	<script>
		function mostrarResultado(str){
			if (str.length==0) {
				document.getElementById("txt").innerHTML="";
				document.getElementById("txt").style.border="0px";
				return;
			}
			if(window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("txt").innerHTML=xmlhttp.responseText;
					document.getElementById("txt").style.border="1px solid #A5ACB2";
				}
			}
			xmlhttp.open("GET","livesearch.php?q="+str,true);
			xmlhttp.send();
		}

	</script>
</head>
<body>
	<form>
		<input type="text" size="30" onkeyup="mostrarResultado(this.value)">
		<div id="txt"></div>
	</form>
</body>
</html>
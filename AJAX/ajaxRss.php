<html>
<head>
	<title></title>
	<script>
		function mostrarRss(str){
			if(str.length==0){
				document.getElementById("txt").innerHTML="";
				return;
			}
			if(window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("txt").innerHTML=xmlhttp.responseText;
				} 
			}
			xmlhttp.open("GET","mostrarRss.php?q="+str,true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<form>
		<select onchange="mostrarRss(this.value)">
		<option value="">Seleccionar un RSS</option>
		<option value="Google">Google</option>
		<option value="NBC">NBC news</option>
		</select>
	</form>
	<br>
	<div id="txt">Rss-feed sera anunciado aqui</div>
</body>
</html>
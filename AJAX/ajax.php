<?php 
//ajax se trata de como actualizar partes de una pagina sin tener 
//que recargar toda la pagina


 ?>
 <html>
 <head>
 	<title></title>
 	<script>
 		function showHint(str){
 			if(str.length==0){
 				document.getElementById("txt").innerHTML="";
 				return;
 			}else{
 				var xmlhttp= new XMLHttpRequest();
 				xmlhttp.onreadystatechange=function(){
 					if(xmlhttp.readyState== 4 && xmlhttp.status ==200){
 						document.getElementById("txt").innerHTML=xmlhttp.responseText;
 					}
 				}
 			}
 			xmlhttp.open("GET","datos.php?q="+str,true);
 			xmlhttp.send();
 		}
 	</script>
 </head>
 <body>
 	<p>
 		<b>Empieza a escribir un nombre en el campo de abajo</b></p>
 		<form>
 			Primer nombre : <input type="text" onkeyup="showHint(this.value)">
 		</form>	
 		<p>Sugerencias:
 			<span id="txt"></span>
 		</p>
 	
 </body>
 </html>
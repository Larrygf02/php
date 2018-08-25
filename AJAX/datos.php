<?php 
//arreglo de nombres
$a[]="anna";
$a[]="Brigitte";
$a[]="Cindy";
$a[]="Diego";
$a[]="Elena";
$a[]="Fiorella";
$a[]="Guillermo";
$a[]="Homero";
$a[]="Ismael";
$a[]="Juan";
$a[]="Karla";
$a[]="Luis";
$a[]="Manuel";
$a[]="Nanda";
$a[]="Oscar";
$a[]="Pablo";
$a[]="Quiqe";
$a[]="Raul";
$a[]="Saul";
$a[]="Tania";

//conseguir el parametro de q 
$q=$_REQUEST["q"];
$hint="";

//las operaciones de búsqueda todos los consejos de matriz si $ q es diferente de
if($q!== ""){
	$q=strtolower($q);
	$len=strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0,$len))) {
			if($hint === ""){
				$hint=$name;
			}else{
				$hint.=",$name";
			}
		}
	}
}
//salida "no sugerencia"
echo $hint === "" ? "no hay sugerencia ": $hint;


 ?>
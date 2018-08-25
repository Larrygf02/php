<?php 
$vote=$_REQUEST['vote'];

$nombreArchivo="poll_resultado.txt";
$contenido=file($nombreArchivo);

$array=explode("||", $contenido[0]);
$si=$array[0];
$no=$array[1];

if($vote==0){
	$si=$si+1;
}else{
	$no=$no+1;
}

$insertarvotos=$si."||".$no;
$fp=fopen($nombreArchivo,"w");
fputs($fp,$insertarvotos);
fclose($fp);

 ?>
 <h2>Resultado:</h2>
 <table>
	<tr>
		<td>Si:</td>
		<td>
			<img src="poll.gif"
			width='<?php echo(100*round($si/($no+$si),2));?>' height='20'>
			<?php echo(100*round($si/($no+$si),2));?>%
		</td>
	</tr>
	<tr>
		<td>No:</td>
		<td>
			<img src="poll.gif"
			width='<?php echo(100*round($no/($no+$si),2));?>' height='20'>
			<?php echo(100*round($no/($no+$si),2));?>%
		</td>
	</tr>
 </table>
<?php
	//se crea una carpeta uplads
	$target_dir="uploads/";
	$target_file=$target_dir.basename($_FILES["archivo"]["name"]);
	$uploadOk=1;
	$tipoimagen=pathinfo($target_file,PATHINFO_EXTENSION);
	//Compruebe si el archivo de imagen es una imagen real o falsa imagen
	if (isset($_POST["submit"])) {
		$check=getimagesize($_FILES["archivo"]["tmp_name"]);
		if($check!== false){
			echo "Archivo es una imagen - ".$check["mime"].".";
			$uploadOk=1;
		}else{
			echo "Archivo no es una imagen";
			$uploadOk=0;
		}			
	}
	//ve si el archivo ya existe en la carpeta uploads
	if(file_exists($target_file)){
		echo "El archivo ya existe";
		$uploadOk=0;
	}
	//Permitir determinados formatos de archivo
	if($tipoimagen != "jpg" && $tipoimagen!="png" && $tipoimagen!="jpeg" 
		&& $tipoimagen!="gif"){
		echo "Perdon, solo JPG,JPEG, PNG & GIF son  permitidos";
		$uploadOk=0;
	}
	//ve si el archivo se ha cargado
	if($uploadOk==0){
		echo "Lo sentimos el archivo no se a subido";
	}
?>
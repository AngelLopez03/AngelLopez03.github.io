<?php 
	require_once 'conectarF.php';
	$nom=$_REQUEST["txtnom"];
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="bdImg/".$foto;
	copy($ruta,$destino);
	mysql_query("insert into subir_foto (nombre,foto) values('$nom','$destino')");
	header("Location: CargarFotos.php");
?>
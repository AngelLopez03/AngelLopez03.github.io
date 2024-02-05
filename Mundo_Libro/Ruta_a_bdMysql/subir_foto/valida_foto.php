<?php
include "conexion.php";
$nom=$_POST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
mysqli_query("INSERT INTO foto (nombre,foto) values('$nom','$destino')");
header("Location: index.php");
?>

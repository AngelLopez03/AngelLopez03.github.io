<?php
	require_once 'clases/auth.class.php';
	require_once 'clases/respuestas.class.php';
	$_auth = new auth;
	$_respuestas = new respuestas;
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$postBody = file_get_contents("php://input");
	}else{
		echo "metodo no permitido";
	}
?>
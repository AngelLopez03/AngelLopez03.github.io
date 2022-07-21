<?php

	session_start();

	include 'conexion_be.php';

	//INICIAR SESIÓN
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$contrasena = hash('sha512', $contrasena);

	//VERIDICACIÓN

	$validar_login = mysqli_query($conexion, "SELECT * FROM registro_usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

	$provando = mysqli_num_rows($validar_login);

	if ($provando > 0) {
		
		$_SESSION['usuario'] = $correo;
		header("location: ../index.php");
		exit;
	
	}else{
		echo '
			<script>
				alert("Usuario no existe, verifique los datos introducidos");
				window.location = "../login.php";
			</script>
		';

		exit();
	}
?>
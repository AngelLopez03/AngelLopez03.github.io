<?php
	
	session_start();

	include 'conexion_be.php';
	//REGISTRARSE
	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	//ENCRIPTAMIENTO DE CONTRASEÑA
	$contrasena = hash('sha512', $contrasena);


	$query = "insert into Registro_Usuarios(nombre_completo, correo, usuario, contrasena) values('$nombre_completo', '$correo', '$usuario', '$contrasena')";

	//VERIFICAR QUE EL CORREO NO SE REPITA LA BASE DE DATOS
	$verificar_correo = mysqli_query($conexion, "SELECT * FROM Registro_Usuarios WHERE correo='$correo' ");
	if (mysqli_num_rows($verificar_correo) > 0) {
		echo '
			<script>
				alert("Este correo ya esta registrado, intente con otro diferente");
				window.location = "../login.php";
			</script>
		';
		exit;
	}

	//VERIFICAR QUE EL Usuario NO SE REPITA LA BASE DE DATOS
	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM Registro_Usuarios WHERE usuario='$usuario' ");
	if (mysqli_num_rows($verificar_usuario) > 0) {
		echo '
			<script>
				alert("Este usuario ya esta registrado, intente con otro diferente");
				window.location = "../login.php";
			</script>
		';
		exit;
	}

	$ejecutar = mysqli_query($conexion, $query);

	if ($ejecutar) {
		echo '
		<script>
			alert("Registrado Correctamente");
			window.location = "../login.php";
		</script>
		';
		exit;
	}

	mysqli_close($conexion);



?>
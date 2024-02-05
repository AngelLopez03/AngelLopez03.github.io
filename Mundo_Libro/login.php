<?php 
	
	session_start();

	if (isset($_SESSION['usuario'])) {
		header("location: index.php");
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Css/login.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>LOGIN</title>
</head>
<body>
	<main>
		<div class="contenedor_todo">
			<div class="caja_trasera">
				<!--Iniciar Sesión Caja Trasera-->
				<div class="caja_trasera_login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Incia sesión para entrar en la página</p>
					<button id="btn_iniciar" >Iniciar sesión</button>
				</div>
				<!--Regístrarse caja trasera Caja Trasera-->
				<div class="caja_trasera_register">
					<h3>¿Aún no tienes una cuenta?</h3>
					<p>Registrate para que puedas iniciar sesión</p>
					<button id="btn_register" >Regístrarse</button>
				</div>
			</div>
			<div class="contenedor_login_register">
				<!--Formulario de Inicio de Sesión-->
				<form action="backend/iniciar_be.php" method="POST" class="formulario_login">
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button type="submit" id="btn_iniciar_sesion">Entrar</button>
				</form>
				<!--Formulario de Regístro-->
				<form action="backend/registro_be.php" method="POST" class="formulario_register">
					<h2>Regístrarse</h2>
					<input type="text" placeholder="Nombre Completo" name="nombre_completo">
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="text" placeholder="Usuario" name="usuario">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button type="submit" id="btn_registrarse">Regístrarse</button>
				</form>
			</div>
		</div>
	</main>
	<script src="js/login.js"></script>
</body>
</html>
<?php 
	require_once 'conexion/conexion.php';
	require_once 'respuestas.class.php';

	class auth extends conexion{
		public function login($json){
			$_respuestas = new respuestas;
			$datos = json_decode($json,true);
			if (isset($datos['usuario']) || !isset($datos[password])) {
				return $_respuestas->error_400();
			}else{
				$usuario = $datos['usuario'];
				$password = $datos['contrasena'];
				$password = parent::encriptar($password);
				$datos = $this->obtenerDatosUsuario($usuario);
				if ($datos) {
					# contraseña valida?
					if ($password == $datos[0]['contrasena']) {
						# code...
					}else{
						#No es valida
						return $_respuestas->error_200("La contraseña no es valida");
					}

				}else{
					#si no existe el usuario
					return $_respuestas->error_200("El usuario $usuario no existe");
				}
			}
		}

		private function obtenerDatosUsuario($correo){
			$query = "SELECT usuario,contrasena,estado from registro_usuarios where correo = '$correo'";
			$datos = parent::obtenerDatos($query);
			if (!isset($datos[0]["usuario"])) {
				return $datos;
			}else{
				return 0;
			}
		}
	}
?>
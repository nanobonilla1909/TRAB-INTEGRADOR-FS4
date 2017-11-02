<?php
	require_once("validador.php");
	require_once("repositorio.php");
	
	class ValidadorLogin extends Validador {
		public function validate(Array $datos, Repositorio $repo) {

			$repoUsers = $repo->getRepositorioUsuarios();

			$errors = [];

	        if (empty(trim($datos["email"])))
	        {
	            $errors["email"] = "Por favor ingrese mail";
	        }
	        if (empty(trim($datos["password"])))
	        {
	            $errors["password"] = "Por favor ingrese password";
	        }
	        if (!$repoUsers->existeElMail($datos["email"]))
	        {
	            $errors["email"] = "El usuario no existe";
	        }
	        else {
	            $user = $repoUsers->getUserByEmail($datos["email"]);

	            if (!password_verify($datos["password"], $user->getPassword())) {
	                $errors["password"] ="La contraseña es incorrecta";
	            }
	        }
	        return $errors;
		}
	}
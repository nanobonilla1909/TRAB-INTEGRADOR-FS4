<?php
	require_once("validador.php");
	require_once("repositorio.php");

	class ValidadorUsuario extends Validador {
		public function validate(Array $datos, Repositorio $repo) {

			$repoUsers = $repo->getRepositorioUsuarios();

			$errors = [];
	        if (empty(trim($datos["name"])))
	        {
	            $errors["name"] = "Por favor ingrese su nombre";
	        }
	        if (empty(trim($datos["email"])))
	        {
	            $errors["email"] = "Por favor ingrese mail";
	        }
	        elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
	            $errors["email"] = "Por favor ingrese un mail correcto";
	        }
	        elseif ($repoUsers->existEmail($datos["email"]))
	        {
	            $errors["email"] = "El email ya esta registrado";
	        }

			if ($datos["surname"] == "")
	        {
	            $errors["surname"] = "Por favor ingrese su apellido";
	        }

	        if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
	            $errors["avatar"] = "Hubo un error al subir la imagen, intentelo de nuevo más tarde";
	        }

	        return $errors;
		}
	}

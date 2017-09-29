<?php
session_start();

function validateInformation($information) {
  $errors = [];

  foreach ($information as $key => $value) {
    $informacion[$key] = trim($value);
  }

  if(strlen($information["name"]) < 3 || strlen($information["name"]) > 20) {
    $errors["name"] = "El nombre debe tener contener 3-20 caracteres";
  }

  if(strlen($information["surname"]) < 3 || strlen($information["surname"]) > 20) {
    $errors["surname"] = "El apellido debe tener contener 3-20 caracteres";
  }

  if (strlen($information["email"]) == 0) {
    $errors["email"] = "Debes completar el email";
  }
  else if(filter_var($information["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errors["email"] = "El mail debe ser valido";
  }

  if (strlen($information["pass"]) < 6) {
    $errors["pass"] = "La contraseña tiene que tener al menos 6 caracteres";
  } else if ($information["pass"] != $information["pass-c"]) {
    $errors["pass"] = "La contraseña no verifica";
  }

  $errorAvatar = $_FILES["avatar"]["error"];
  $nameAvatar = $_FILES["avatar"]["name"];
  $extention = pathinfo($nameAvatar, PATHINFO_EXTENSION);
  $avatarSize = $_FILES["avatar"]["size"];

  if ($errorAvatar != UPLOAD_ERR_OK) {
    $errors["avatar"] = "Error al cargar la foto";
  }
  else if ($extention != "jpg" && $extention != "jpeg" && $extention != "png") {
    $errors["avatar"] = "El avatar debe tener extension JPG, JPEG o PNG";
  }
  elseif ($avatarSize > 1572864) {
    $errors["avatar"] = "El tamanio debe ser menor";
  }

  if (!isset($_POST["terms"])) {
    $errors["terms"] = "Debe ser mayor de edad y aceptar Terminos y condiciones";
  }

  return $errors;
}

function saveUser($user) {
  $userJSON = json_encode($user);
  file_put_contents("users.json", $userJSON . PHP_EOL, FILE_APPEND);
}

function doUser($data) {
  return [
    "name" => $data["name"],
    "surname" => $data["surname"],
    "email" => $data["email"],
    "pass" => password_hash($data["pass"], PASSWORD_DEFAULT),
  ];
}

function getAll() {
  $file = file_get_contents("users.json");
  $array = explode(PHP_EOL, $file);
  array_pop($array);

  $arrayFinal = [];
  foreach ($array as $user) {
    $arrayFinal[] = json_decode($user, true);
  }

  return $arrayFinal;
}

?>

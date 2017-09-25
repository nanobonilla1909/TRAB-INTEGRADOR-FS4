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

  if ($errorAvatar != UPLOAD_ERR_OK) {
    $errors["avatar"] = "Error al cargar la foto";
  }
  else if ($extention != "jpg" && $extention != "jpeg" && $extention != "png") {
    $errors["avatar"] = "El avatar debe tener extension JPG, JPEG o PNG";
  }

  if (empty($information["terms"])) {
    $errors["terms"] = "Debe ser mayor de edad y aceptar Terminos y condiciones";
  }

  return $errors;
}
?>

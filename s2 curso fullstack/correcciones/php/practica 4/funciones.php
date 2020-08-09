<?php

$errores = [];

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$pass = isset($_POST["password"]) ? $_POST["password"] : "";



if($_POST) {
  if (!$email) {
    $errores[] = "igrese mail";
} else if ((!filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $errores[] = "ingrese mail valido";
}

# ahora validar pass

if (!$pass) {
  $errores[] = "debe ingresar un password";
} else if (strlen($pass) < 8) {
  $errores[] = "el password debe tener al menos 8 caracteres";
}
} #fin if post


 ?>

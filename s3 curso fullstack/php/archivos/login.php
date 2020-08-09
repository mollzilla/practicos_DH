<?php
$errores=[];

if (isset($_COOKIE['usuario'])) {
  header('location:perfil_session.php');
}

if ($_POST) {
$usuariosJson = file_get_contents("usuarios.json");

$usuarios = json_decode($usuariosJson, true);

$usuarioBuscado = [];

//var_dump($usuarios); //mostramos los datos en un var_dump para asegurarnos de que se decodearon bien


foreach ($usuarios as $usuario) {
    if ($_POST["email"] == $usuario["email"] && password_verify($_POST["pass"], $usuario["pass"])) {
      $usuarioBuscado = $usuario;
      break;
    }

}

  if($usuarioBuscado) {
    session_start();
    $_SESSION["email"] = $usuarioBuscado["email"];
    

    if (isset($_POST["recordarme"]) && $_POST["recordarme"]==true) {
      setcookie('usuario', $_SESSION["email"], time() + 10);
    }
    header('location:perfil_session.php');
  }
}
?>


<!DOCTYPE HTML>
<html>
<body>
<form action="login.php" method="post">
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<label for="pass">Contrasena:</label>
<input type="password" name="pass">
<br>
<label for="recordarme">Recordarme:</label>
<input type="checkbox" name="recordarme">
<br>
<input type="submit" name="submit">
</form>

<ul>
  <?php foreach ($errores as $error): ?>
    <li><?=$error?></li>
  <?php endforeach; ?>
</ul>

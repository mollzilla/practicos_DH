<?php
session_start();


if (isset($_COOKIE['usuario'])) {
  $_SESSION["email"] = $_COOKIE["usuario"];
}

if (isset($_POST["cerrar"])) {
  session_destroy();
  setcookie('usuario', '', -1);
  header('location:login.php');
}

if ($_SESSION) {
  echo $_SESSION["email"] . "<br>";

}



?>


<form class="" action="perfil_session.php" method="post">
  <input type="submit" name="cerrar" value="Cerrar Sesion">
</form>

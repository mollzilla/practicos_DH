<?php
// . modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe
// poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y
// debe incrementar su valor en 1. Probar las modificaciones en mostrar.php

session_start();

if ($_POST) {

  if (isset($_POST["reiniciar"])) {
    $_SESSION["contador"] = 0;
  }

  if(isset($_POST["incrementar"])) {
    $_SESSION["contador"] = $_SESSION["contador"] + 1;
  }
} // fin if[$_POST]
 ?>



<form class="" action="modificar.php" method="post">
  <input type="submit" name="reiniciar" value="Reiniciar">
  <input type="submit" name="incrementar" value="Incrementar">
</form>

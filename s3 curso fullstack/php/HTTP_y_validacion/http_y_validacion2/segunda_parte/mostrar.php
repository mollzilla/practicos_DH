<?php

// a. mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe).
// En este archivo se debe imprimir el valor actual de contador.
session_start();

if ($_SESSION) {

echo $_SESSION["contador"];

}
 ?>

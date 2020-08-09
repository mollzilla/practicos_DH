<?php

$dsn = "mysql:host=localhost;dbname=movies_db;port=3306";
$user = "root";
$pass = "";

try {
    $conexion = new PDO($dsn, $user, $pass);
} catch (\Exception $e) {
  echo "error";
  exit;
}
  echo "conectado";

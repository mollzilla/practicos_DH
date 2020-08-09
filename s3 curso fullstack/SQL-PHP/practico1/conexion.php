<?php

$dsn = 'mysql:host=localhost;dbname=movies_db;port=3306';

try {
    $conexion = new PDO($dsn, 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    echo "Hubo un error inesperado....";
    var_dump($th);
}

echo "EEEEEExitos....."


?>
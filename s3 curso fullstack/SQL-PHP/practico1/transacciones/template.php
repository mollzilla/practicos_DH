<?php

// Realizaremos transacciones en PDO utilizando bloques try/catch
// Dentro del catch, además, imprimiremos la palabra “Error: ” junto con $e->getMessage()
// Siempre, tras ejecutar un ejercicio, observaremos si se insertaron o no cosas en la tabla Pelicula

// Realizar una transacción que inserte 3 películas completando todos sus datos correctamente.

require_once("../conexion.php");

$conexion->beginTransaction();


try {
    // exec ejecuta una sentencia sql y devuelve el numero de filas afectadas por la sentencia
    $query = $conexion->exec("");
    $db->commit();
} catch (\Throwable $th) {
    echo $th->getMessage();
    $db->rollBack();
}






?>
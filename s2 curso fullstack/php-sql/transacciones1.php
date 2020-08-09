<?php include("practico.php");
      include("head.php");

/*
Transacciones
Para los siguientes ejercicios:
● Realizaremos transacciones en PDO utilizando bloques try/catch
● Dentro del catch, además, imprimiremos la palabra “Error: ” junto con
$e->getMessage()
● Siempre, tras ejecutar un ejercicio, observaremos si se insertaron o no cosas en la
tabla Pelicula

1. Realizar una transacción que inserte 3 películas completando todos sus datos
correctamente.
*/
try {

  $conexion->beginTransaction();
    $insert = $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli1', 1, 1, '1000-11-11 00-00-00', 1, 3, null);");
    $insert = $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli2', 1, 1, '1000-11-11 00-00-00', 1, 3, null);");
    $insert = $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli3', 1, 1, '1000-11-11 00-00-00', 1, 3, null);");
  $conexion->commit();
} catch (\Exception $e) {
  $conexion->rollback();
  echo "Error: " . $e->getMessage();
}
echo "insertadas";




?>

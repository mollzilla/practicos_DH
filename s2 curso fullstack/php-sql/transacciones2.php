
<?php include("practico.php");
      include("head.php");

/*

● Realizaremos transacciones en PDO utilizando bloques try/catch
● Dentro del catch, además, imprimiremos la palabra “Error: ” junto con
$e->getMessage()
● Siempre, tras ejecutar un ejercicio, observaremos si se insertaron o no cosas en la
tabla Pelicula

2. Realizar una transacción que inserte 3 películas y que la primera tenga un id_genero
que no exista.

*/
$conexion->beginTransaction();

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli4', 1, 1, '1000-11-11 00-00-00', 1, 52, null);");
    $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli5', 1, 1, '1000-11-11 00-00-00', 1, 3, null);");
    $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli6', 1, 1, '1000-11-11 00-00-00', 1, 3, null);");
  $conexion->commit();
} catch (PDOException $e) {
  $conexion->rollback();
  echo "Error: " . $e->getMessage();
  exit;
}
echo "insertadas";

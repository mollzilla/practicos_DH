
<?php include("practico.php");
      include("head.php");

/*

● Realizaremos transacciones en PDO utilizando bloques try/catch
● Dentro del catch, además, imprimiremos la palabra “Error: ” junto con
$e->getMessage()
● Siempre, tras ejecutar un ejercicio, observaremos si se insertaron o no cosas en la
tabla Pelicula

4. Realizar una transacción que realice una query con un error de sintaxis y luego
inserte una película.
5. Realizar una transacción que inserte una película y luego que realice una query con
un error de sintaxis.
*/

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    $conexion->beginTransaction();
    $consulta = $conexion->exec("SELECT * FROM movies VALUES);");
    $insert = $conexion->exec("INSERT INTO movies VALUES (default, '1000-11-11 00-00-00', '1000-11-11 00-00-00', 'mipeli7', 1, 1, '1000-11-11 00-00-00', 1, 48, null);");
  $conexion->commit();
} catch (\Exception $e) {
  $conexion->rollback();
  echo "Error: " . $e->getMessage();
  exit;
}
echo "insertadas";

<?php

include("practico.php");
/*4. Armar un buscador de SERIES o PELICULAS, el mismo archivo debe servir para
buscar cualquier de las dos opciónes, por ejemplo a través de un radio-button,
preguntar al usuario qué desea buscar y luego de eso, realizar la consulta a la DB.
Generar errores si no se seleccionó el tipo de búsqueda y así mismo si la busqueda
no arrojo resultados */

if (isset($_GET["submit"])) {

  if (!isset($_GET["quebuscar"])) {
    $errores = "Por favor elige qué tipo buscar";
  } else {

  $tabla = $_GET["quebuscar"];
  $clave = $_GET["titulo"];

  $consulta = $conexion->prepare("SELECT * FROM $tabla WHERE title LIKE :clave");


  $consulta->bindValue(':clave', "%$clave%");


  $consulta->execute();
  $resultados = $consulta->fetchAll();

  if (empty($resultados)) {
    $errores = "Lo siento, la Busqueda no arrojo resultados";
  }
}
}
 ?>

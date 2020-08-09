<?php
include("practico.php");
include("head.php");

/*  2. Realizar un archivo serie.php que muestre los datos de una serie (EJ: cantidad de
  episodios). Para esto, tendremos una variable $idSerie que será modificada
  directamente en el código (ejemplo: $idSerie = 5;). La consulta debe hacerse a
  través de un statement.
 */


$id = $_GET["id"];

$consulta = $conexion->prepare("SELECT * FROM series WHERE id LIKE $id");
$consulta->execute();
$resultadoSerie= $consulta->fetch(PDO::FETCH_ASSOC);
 ?>

    <div class="">
      <h3><?= $resultadoSerie["title"]?></h3>
      <ul>
        <?php foreach ($resultadoSerie as $datos => $valor):
          $valor == null ? $valor = "desconocido" : $valor?>
          <li><?= "El valor de " . $datos . " es " . $valor ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>

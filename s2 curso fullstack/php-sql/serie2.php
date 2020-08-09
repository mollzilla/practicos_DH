<?php
include("practico.php");
include("head.php");
/*
a. Modificar el archivo para que reciba un parámetro por GET serie_id y realice
la consulta en la bd por ese parámetro. Para probar editaremos la URL
modificando el queryString

  b. Hacer que el link del archivo series.php funcione para cada elemento y
  muestre los datos en serie.php. */

$id = $_GET['id'];

$consulta = $conexion->prepare("SELECT * FROM series WHERE id LIKE '$id';");
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

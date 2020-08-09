
<?php
include("practico.php");
include("head.php");

  /*5. Armar un archivo actores.php que arme un <ul> con todos los actores de nuestra
  base de datos.*/

  $consulta = $conexion->prepare("SELECT * FROM actors");
  $consulta->execute();
  $results = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Listado de Actores</h1>
  <ul>
    <?php foreach ($results as $actor): ?>
      <li><?= $actor["first_name"] . " " .  $actor["last_name"] ?></li>
    <?php endforeach; ?>
  </ul>

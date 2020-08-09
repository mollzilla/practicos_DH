<?php include("practico.php");
      include("head.php");

/*
  6. Armar un archivo generos.php para que liste todos los generos y por cada uno de los
  géneros, además, arme un sector en donde indique todas las películas de dicho
  género.

  7. Modificar generos.php para que el título de cada película sea además un link a
  pelicula.php enviando por GET el id de dicha película. pelicula.php debe mostrar la
  información de dicha película.
*/

$id = $_GET["id"];

$consulta = $conexion->prepare("SELECT * FROM movies WHERE id = $id");
$consulta->execute();
$resultadoPeli = $consulta->fetch(PDO::FETCH_ASSOC);

 ?>

    <div class="">
      <h3><?= $resultadoPeli["title"]?></h3>
      <ul>
        <?php foreach ($resultadoPeli as $datos => $valor):
          if ($datos == "title") { continue; }
          $valor == null ? $valor = "desconocido" : $valor?>
          <li><?= "El valor de " . $datos . " es " . $valor ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>

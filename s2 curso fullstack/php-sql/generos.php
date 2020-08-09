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

  $consultaGeneros = $conexion->prepare("SELECT id, name FROM genres");
  $consultaGeneros->execute();
  $generos = $consultaGeneros->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Listado de Generos</h1>

  <ul>
    <?php foreach ($generos as $genero): ?>
      <li><a href="pelisdelgenero.php/?id=<?=$genero['id']?>"> <?=$genero["name"]?></a> </li>
        <ul>
          <?php
          $id = $genero['id'];
          $consultaPelis = $conexion->prepare("SELECT id, title FROM movies where genre_id = '$id';");
          $consultaPelis->execute();
          $pelis = $consultaPelis->fetchAll(PDO::FETCH_ASSOC);
          foreach ($pelis as $peli) { ?>
            <li><a href="pelicula.php/?id=<?=$peli["id"]?>"><?= $peli["title"] ?></a></li>
          <?php }?>

        </ul>

    <?php endforeach; ?>
  </ul>

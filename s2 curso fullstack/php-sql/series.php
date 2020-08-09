<?php include("practico.php");
include("head.php");

  /*Trabajando con movies_db (misma base de datos utilizada en la ejercitación de MySQL)
  1. Crear el archivo series.php que con un statement consulte a la BD de todas la series
  y los muestre como un listado (div, li). */

$consulta = $conexion->prepare("SELECT * FROM series");
$consulta->execute();
$resultadoSeries= $consulta->fetchAll(PDO::FETCH_ASSOC);

/*
  a. Adicionar que tenga un link que vaya a serie.php.
*/

 ?>

    <h1>TRABAJO PRACTICO PHP + SQL</h1>


<div class="">
  <ul>
    <?php foreach ($resultadoSeries as $serie): ?>
      <li><a href="serie2.php?id=<?=$serie['id']?>"> <?= $serie["title"] ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>


    <table>
      <tr>
        <th>Id</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Titulo</th>
        <th>Lanzada</th>
        <th>Cancelada</th>
        <th>Id de Genero</th>
      </tr>
      <?php foreach ($resultadoSeries as $serie): ?>
        <tr>
          <td><?=$serie["id"]?></td>
          <td><?=!$serie["created_at"] ? "desconocido" : $serie["created_at"]?></td>
          <td><?=!$serie["updated_at"] ? "desconocido" : $serie["updated_at"]?></td>
          <td><a href="series.php"><?=$serie["title"]?></a></td>
          <td><?=$serie["release_date"]?></td>
          <td><?=$serie["end_date"]?></td>
          <td><?=$serie["genre_id"]?></td>
        </tr>
      <?php endforeach; ?>

    </table>


  </body>
</html>

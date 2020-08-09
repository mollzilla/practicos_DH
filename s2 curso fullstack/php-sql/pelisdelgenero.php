<?php include("practico.php");
include("head.php");

$genero = $_GET["id"];
$consulta = $conexion->prepare("SELECT m.title, g.name FROM movies m INNER JOIN genres g ON m.genre_id = g.id WHERE genre_id = $genero");
$consulta->execute();
$pelis = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Pelis del Genero <?=$pelis[0]["name"]?></h1>
  <ul>
    <?php foreach ($pelis as $peli): ?>
      <li><?=$peli["title"]?></li>
    <?php endforeach; ?>
  </ul>

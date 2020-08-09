<?php

require_once('conexion.php');

// Armar un archivo generos.php para que liste todos los generos y por cada uno de los géneros, además, arme un sector en donde indique todas las películas de dicho género.

$statement = $conexion->prepare("SELECT m.title, g.name as genero, m.id as movie_id FROM movies m inner join genres g ON g.id = m.genre_id WHERE genre_id = :id");
$statement->bindValue(':id', $_GET["id"]);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
       <h2>Peliculas del genero <?=$results[0]["genero"]?></h2> 
        <ul>
            <?php foreach ($results as $result) : ?>
                <li>
                    <a href="peliculas.php?id=<?=$result['movie_id']?>"> <?=$result['title']?> </a>
                </li>
            <?php endforeach; ?>
            

        </ul>
    </div>
</body>

</html>






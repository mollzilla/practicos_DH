html<?php

require_once('conexion.php');

// Armar un archivo generos.php para que liste todos los generos y por cada uno de los géneros, además, arme un sector en donde indique todas las películas de dicho género.

$statement = $conexion->prepare("SELECT * from movies where id = :id");
$statement->bindValue(':id', $_GET["id"]);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
       <h2>Usted selecciono la pelicula <?=$result['title']?></h2> 
        <ul>
            <?php foreach ($result as $key => $value) : ?>
                <li>
                    El valor de <?=$key?> es <?=$value ? $value : "desconocido" ?>
                </li>
            <?php endforeach; ?>
            

        </ul>
    </div>
</body>

</html>






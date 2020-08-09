<?php

require_once('conexion.php');

// Armar un archivo generos.php para que liste todos los generos y por cada uno de los géneros, además, arme un sector en donde indique todas las películas de dicho género.

$statement = $conexion->prepare("SELECT g.name as genre, g.id as id FROM genres g");
$statement->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Generos</h2>
        <ul>
        <?php 
        $result = $statement->fetch(PDO::FETCH_ASSOC); ?>
        <?php while ($result) { ?>
            <li><a href="genero.php?id=<?=$result["id"]?>"><?=$result["genre"] ?></a></li>
        <?php $result = $statement->fetch(PDO::FETCH_ASSOC); ?>
        <?php } ?>
        </ul>
    </div>
</body>

</html>






<?php

require_once('conexion.php');

// Crear el archivo series.php que con un statement consulte a la BD de todas la series y los muestre como un listado (div, li).

$statement = $conexion->prepare("SELECT * FROM series");
$statement->execute();
// $results = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
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
        <ul>
        <?php 
        $result = $statement->fetch(PDO::FETCH_ASSOC); ?>
        <?php while ($result) { ?>
            <li><a href="serie.php?id=<?=$result["id"]?>"><?=$result["title"] ?></a></li>
        <?php $result = $statement->fetch(PDO::FETCH_ASSOC); ?>
        <?php } ?>
        </ul>
    </div>
</body>

</html>






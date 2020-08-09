<?php

    include('conexion.php');

    $query= $conexion->prepare("SELECT * FROM series WHERE id=:id");

    $query->bindValue(':id', $_GET["id"]);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($result as $key => $value) { ?>
            <li>El valor de <?=$key?> es <?=$value ? $value : "desconocido"?> </li>
        <?php } ?>
    </ul>
</body>
</html>
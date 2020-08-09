<?php

require_once('conexion.php');

if (isset($_GET["enviado"])) {
    $tabla = isset($_GET["tabla"]) ? $_GET["tabla"] : "";
    $buscador = $_GET["buscador"];
    $consulta = $conexion->prepare("SELECT * FROM $tabla WHERE title LIKE :buscador");
    var_dump($consulta);
    $consulta->bindValue(':buscador', "%$buscador%");
    $consulta->execute();
    $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultados);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    <form action="buscador.php" method="get">
        Series <input type="radio" name="tabla" id="series" value="series">
        Peliculas <input type="radio" name="tabla" id="movies" value="movies">
        <br>
        <label for="buscador">Buscador</label>
        <input type="text" name="buscador" id="buscador">
        <br>
        <input type="submit" value="enviar" name="enviado">
    </form>

    <?php if (isset($resultados)) {
        var_dump($resultados);
    } ?>
    
</body>
</html>
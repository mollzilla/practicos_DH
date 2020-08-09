<?php
    $nombre = "";
    $email = "";
    var_dump($_POST);
    echo "<hr>";
    if ($_POST) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenido <?=$nombre?>!</h2>
    <hr>
    <h3><?php //Probar la función de php getAllHeaders() e imprimir su resultado. ¿Qué encontramos?
            var_dump(getallheaders()); ?>
    </h3>
    <!-- Así como imprimimos $_POST y $_GET existen otras variables globales que
podemos usar. Probar cada una de estas variables en un pedido vacío y luego
agregándoles datos: -->

<?php $methods = [$_SERVER,$_FILES, $_REQUEST, $_SESSION, $_COOKIE];

    foreach($methods as $method) {
        if($method) {
        var_dump($method);
        echo "<hr>"; 
    }
    } ?>
    <h4></h4>
</body>
</html>


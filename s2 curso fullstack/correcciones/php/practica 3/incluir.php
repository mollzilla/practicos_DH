<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- 
Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.
Incluir en el archivo, saludo.php. ¿Qué sucede?
Reemplazar include por require. ¿Qué sucede?
Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede? -->

    <?php
    
    echo "soy incluir.php";

    echo "<hr>";

    include_once "saludo.php";

    include_once "saludo.php";

    include_once "saludo.php";

    ?>

    <hr>



</body>

</html>
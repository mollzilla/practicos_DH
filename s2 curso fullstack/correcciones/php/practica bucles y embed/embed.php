<?php
/*Embedding

Partiendo del archivo embed.html
1. Inicializar una variable $nombre antes del código HTML y reemplazar [NOMBRE] por el valor de dicha variable */
  $nombre = "mili";

# 2. Previo al código HTML sortear un número que puede ser 0 o 1. Si el número es 1 se imprimirá luego del texto “¿Es usted un ganador?” el texto “SI”. Por el contrario, si el número es 0, se imprimirá el texto “NO”.

$ganador = "NO";
$numero = rand(0,1);
if ($numero) {
  $ganador = "SI";
}

#3. Modificar el listado de sitios web para que estos sean tomados de un Array. ¿Cómo podemos hacer para que también se generen bien los hipervínculos?

$links = [
  "Google" => "www.google.com",
  "Facebook" => "www.facebook.com",
  "Twitter" => "www.twitter.com"
];
#4. ¿Pudiste escribir todo el código utilizando la sintaxis corta?
#5. Armar un array con la siguiente estructura */

$array = [
        0 => [
                "id" => 1,
                "titulo" => "“Lorem Ipsum”",
                "descripcion" => "“Lorem Ipsum”",
                "precio" => 300,
                "imagen" => "“img-pdto-1.jpg”",
                "enoferta" => true
        ],

        1 => [
                "id" => 2,
                "titulo" => "“Lorem Ipsum”",
                "descripcion" => "“Lorem Ipsum”",
                "precio" => 500,
                "imagen" => "“img-pdto-2.jpg”",
                "enoferta" => false
        ]
];

/* El array debe tener un total de 10 elementos con distintos precios, imágenes,

descripciones, títulos y valores booleanos en el campo “enOferta”


Tomando el ejercicio de Kitchener y el array del ejercicio anterior, modificar el código para que los artículos que se muestran en la maqueta provengan del Array.
Agregar un mensaje de “En Oferta” en los productos que efectivamente tengan un valor verdadero en el campo “enOferta”


Bonus


Modificar el menú de navegación de Kitchener para que los elementos del menú provengan de un Array.


¿Que pasa si el array tiene más o menos de 6 elementos? ¿Se te ocurre cómo corregirlo? */
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="font-family: sans-serif; background-color: #add8e6">
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombre ?></h2>
    <h3>¿Es usted un ganador? <?= $ganador ?></h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($links as $link => $url): ?>
      <li>
        <a href="<?= $url ?>"><?= $link ?></a>
      </li>
    <?php endforeach; ?>
    </ul>
  </body>
</html>

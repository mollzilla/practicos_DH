<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="font-family: sans-serif; background-color: #add8e6">

<h1>Trabajo Practico - Bucles y Embed</h1>

<?php

/* Ejercicio 1

Mostrar la tabla de multiplicar del 2 utilizando un for */

for ($i=0; $i <= 20; $i+=2) {
  echo $i . " - ";
}

echo "<br>";

/* Ejercicio 2

Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente). */

$i = 100;
while ($i >= 85) {
  echo $i;
  echo " - ";
  $i--;
}

echo "<br>";

/* Ejercicio 3

 Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10. */

$contador = 1;
while ($contador <= 5) {
  echo $contador * 2 . " - ";
  $contador++;
}

echo "<br>";


/* Ejercicio 4

Utilizando un while haremos un programa que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara. */

$cantidadDeVeces = 0;
$tiros = 0;

while ($cantidadDeVeces < 5) {
  $tirada = floor(rand(0,1));
  echo $tirada . "<br>";
  if ($tirada == 1) {
    $cantidadDeVeces += 1;
  }
  $tiros++;
}

echo $cantidadDeVeces . "<br>";
echo $tiros;

echo "<br>";

/* Ejercicio 1
Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla.
Resolver este problema con un for.
Resolver este problema con while.
Resolver este problema con un do/while.
Resolver este problema con un foreach.
*/

echo "<br>";

$nombres = ["mili", "jime", "male", "bru", "nacho"];

for ($i=0; $i < count($nombres) ; $i++) {
  echo $nombres[$i] . " - ";
}

echo "<br>";

$a = 0;
while ($a < count($nombres)) {
  echo $nombres[$a] . " - ";
  $a++;
}

echo "<br>";

$a = 0;
do {
  echo $nombres[$a] . " - ";
  $a++;
} while ($a < count($nombres));

echo "<br>";

foreach ($nombres as $nombre) {
  echo $nombre . " - ";
}

/* Ejercicio 6
Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”) */

$arrayDeAleatorios = [];

for ($i=0; $i < 10; $i++) {
  $arrayDeAleatorios[] = (rand(0,10));
}

echo "<br>";

foreach ($arrayDeAleatorios as $numeroAleatorio) {
  if ($numeroAleatorio == 5) {
    echo "Se encontro un 5!!!";
    break;
  } else {
    echo $numeroAleatorio . " ";
  }
}

echo "<br>";

/* Ejercicio 5. Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando cuantos números son pares. */

$arrayDeAleatorios = [];

for ($i=0; $i < 10; $i++) {
  $arrayDeAleatorios[] = (rand(0,100));
} var_dump($arrayDeAleatorios);

echo "<br>";

$pares = 0;
foreach ($arrayDeAleatorios as $aleatorio) {
  if ($aleatorio%2 == 0) {
    $pares = $pares + 1;
  }
  echo $aleatorio . " ";
}

echo "<br>";

/* Ejercicio 8

Definir una variable $mascota que sea un array asociativo
En el índice animal debe decir qué animal es.
En el índice edad debe decir la edad.
En el índice altura debe decir la altura.
En el índice nombre debe decir el nombre  */

$mascota = [
  "animal" => "perro",
  "edad" => 13,
  "altura" => 65,
  "nombre" => "Puccini"
];

/* Ejercicio 1
Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
animal: perro

*/

foreach ($mascota as $key => $value) {
  echo "$key que es $value <br>";
}

echo "<br>";

/* Ejercicio 9

Partiendo de un archivo con la siguiente variable definida:
Crear un script que muestre el nombre de la capital y el país desde la variable $ceu. */

echo "<br>";


$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg",
"Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki",
 "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana",
"Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London",
"Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin",
 "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
  foreach ($ceu as $key => $value) : ?>
  <ul>
    <li><?= "$key y su capital es $value" ?></li>
  </ul>
  <?php endforeach; ?>

<!--  Ejercicio 10

 Partiendo de un archivo con la siguiente variable definida:

Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu con el siguiente formato:

Las ciudades de Argentina son:

Buenos Aires
Córdoba
Santa Fé -->

<?php $ceu = [

        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]

]; ?>

<h3>Ejercicio 14</h3>

<?php foreach ($ceu as $key => $value) : ?>
  <h4>Las capitales de <?= $key ?> son:</h4>
  <ul>
    <?php foreach ($value as $capital): ?>
      <li><?= $capital ?></li>
    <?php endforeach; ?>
  </ul>

<?php endforeach; ?>


<!-- Ejercicio 15. A partir del ejercicio anterior:

Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano. Este valor debe ser true o false.
Hacer que la impresión anterior no muestre países que no sean Americanos.

IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo por cada país en donde cada país tendrá los datos de sus ciudades y esAmericano. -->



<?php $ceu = [

        "Argentina" => ["ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
                        "es americano" => true],

        "Brasil" => ["ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
                    "es americano" => true],

        "Colombia" => ["ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
                      "es americano" => true],

        "Francia" => ["ciudades" => ["Paris", "Nantes", "Lyon"],
                      "es americano" => false],

        "Italia" => ["ciudades" => ["Roma", "Milan", "Venecia"],
                    "es americano" => false],

        "Alemania" => ["ciudades" => ["Munich", "Berlin", "Frankfurt"],
                      "es americano" => false]

]; ?>


  <ul>
    <?php foreach ($ceu as $pais => $valores): ?>
      <?php if ($valores["es americano"] == true): ?>
        <li>Las Capitales de <?=$pais?> Son:</li>
          <ul>
            <?php foreach ($valores["ciudades"] as $ciudad): ?>
              <li><?=$ciudad?></li>
            <?php endforeach; ?>
          </ul>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

<?php

$ceu = [

        "Argentina" => ["ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
                        "esAmericano" => true],

        "Brasil" => ["ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
                      "esAmericano" => true],

        "Colombia" => ["ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
                      "esAmericano" => true],

        "Francia" => ["ciudades" => ["Paris", "Nantes", "Lyon"],
                      "esAmericano" => false],

        "Italia" => ["ciudades" => ["Roma", "Milan", "Venecia"],
                      "esAmericano" => false],

        "Alemania" => ["ciudades" => ["Munich", "Berlin", "Frankfurt"],
                      "esAmericano" => false]
]; ?>

<h3>Ejercicio 15 - Datos de Paises Americanos</h3>

<?php foreach ($ceu as $pais => $datos) : ?>
  <?php if ($datos["esAmericano"] == true): ?>
    <h3>Las capitales de <?= $pais ?> son:</h3>
      <ul>
        <?php foreach ($datos["ciudades"] as $dato => $valores) : ?>
            <li><?= $valores ?></li>
        <?php endforeach; ?>
      </ul>
  <?php endif; ?>
<?php endforeach; ?>

</body>
</html>

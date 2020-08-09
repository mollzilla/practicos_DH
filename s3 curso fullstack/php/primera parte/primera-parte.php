<?php /* Bucles
1. Mostrar la tabla de multiplicar del 2 utilizando un for. */

for ($i=0; $i < 11; $i++) {
  echo $i*2;
}
/*
2. Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).*/
echo "<hr>";
$i = 100;
while ($i > 84) {
  echo $i. " - ";
  $i--;
}
/*
3. Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre
por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.*/

echo "<hr>";

$i = 1;
while ($i <= 5) {
  echo $i * 2 . " - ";
  $i++;
}
echo "<hr>";
/*
4. Utilizando un while haremos un programa que tire una moneda (seleccionará un número
al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar,
debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.*/

$intento = rand(0,1);
$tiros = 0;
$veces5 = 0;

while ($veces5 <= 5) {
  $intento = rand(0,1);
  $tiros++;
  if ($intento == 1) {
    $veces5++;
  }
}
echo "Tomo " . $tiros . " intentos lograr obtener 5 veces cara.";
echo "<hr>";
/*
5. Definir un array con 5 strings que sean
nombres. Recorrer este array para imprimir cada
uno de los nombres en pantalla.
a. Resolver este problema con un for.*/

$nombres = ["jime", "nacho", "mili",
 "male", "bru"];

for ($i=0; $i < count($nombres); $i++) {
  echo $nombres[$i] . " - ";
}
echo "<hr>";
/*
b. Resolver este problema con while.*/
$a = 0;
while ($a < count($nombres)) {
  echo $nombres[$a] . " - ";
  $a++;   
}
echo "<hr>";
/*
c. Resolver este problema con un do/while.*/
$a = 0;
  do {echo $nombres[$a] . " - ";
  $a++;
}
while ($a < count($nombres));
echo "<hr>";
/*
d. Resolver este problema con un foreach.*/

foreach ($nombres as $nombre) {
  echo $nombre . " - ";
}
echo "<hr>";

/*
6. Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir
todos los números. La ejecución debe terminarse si alguno de los números encontrados es
un 5 (Se debe imprimir “Se encontró un 5!”) */

$array = [rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10)];

$pares = 0;

foreach ($array as $numero) {
  if ($numero == 5) {
    echo "Se encontro un 5!!!";
    break;
  } else
  echo $numero . " - ";
}
/*
7. Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando
cuantos números son pares.*/
echo "<hr>";
$array = [rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100)];

$pares = 0;
foreach ($array as $numero) {
  if ($numero%2 == 0) {
    $pares++;
  }
}
echo $pares;

echo "<hr>";
/*
8. Definir una variable $mascota que sea un array asociativo
a. En el índice animal debe decir qué animal es.
b. En el índice edad debe decir la edad.
c. En el índice altura debe decir la altura.
d. En el índice nombre debe decir el nombre*/

$mascota = [
  "animal" => "gato",
  "edad" => 7,
  "altura" => 35,
  "nombre" => "musetta"
];

/*
e. Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
animal: perro
edad: 5
altura: 0,60
nombre: Sonic
*/

foreach ($mascota as $key => $value) {
  echo $key . " tiene el valor de " . $value . ". <br>";
}
echo "<hr>";
/*
9. Partiendo de un archivo con la siguiente variable definida:
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=>
"Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" =>
"Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
"Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino
Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica
Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.*/

$ceu = array( "Italia"=>"Roma",
"Luxembourg"=>"Luxembourg",
 "Bélgica"=>"Bruselas",
 "Dinamarca"=>"Copenhagen",
 "Finlandia"=>"Helsinki",
 "Francia" =>"Paris",
 "Slovakia"=>"Bratislava",
 "Eslovenia"=>"Ljubljana",
 "Alemania" => "Berlin",
"Grecia" => "Athenas",
 "Irlanda"=>"Dublin",
 "Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon",
 "España"=>"Madrid",
 "Suecia"=>"Stockholm",
 "Reino Unido"=>"London",
 "Chipre"=>"Nicosia",
 "Lithuania"=>"Vilnius",
 "Republica Checa"=>"Prague",
 "Estonia"=>"Tallin",
 "Hungría"=>"Budapest",
 "Latvia"=>"Riga",
"Malta"=>"Valletta",
 "Austria" => "Vienna",
 "Polonia"=>"Warsaw") ;

foreach ($ceu as $pais => $capital) {
  echo $pais . " y su capital es " . $capital . "<br>";
}

/*
10. Partiendo de un archivo con la siguiente variable definida:
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu
con el siguiente formato:
Las ciudades de Argentina son:
● Buenos Aires
● Córdoba
● Santa Fé
Las ciudades de Brasil son:
● Brasilia
● Rio de Janeiro
● Sao Pablo */

$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $pais => $arrayDeCiudades) : ?>
  <h3>las ciudades de <?=$pais?> son:</h3>
    <ul>
      <?php foreach ($arrayDeCiudades as $ciudad): ?>
        <li><?=$ciudad?></li>
      <?php endforeach; ?>
    </ul>
<?php endforeach;


/*
15. A partir del ejercicio anterior:
● Agregarle a cada país un dato extra además de sus ciudades llamado
esAmericano. Este valor debe ser true o false.
● Hacer que la impresión anterior no muestre países que no sean Americanos.
IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo
por cada país en donde cada país tendrá los datos de sus ciudades y esAmericano.
*/

$ceu2 = [
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

<h3>Mostrando Solo ciudades de Paises Americanos</h3>

<?php foreach ($ceu2 as $pais => $datosDePais) : ?>
  <?php if ($datosDePais["esAmericano"] == true) : ?>
    <li>
    Las ciudades de <?=$pais?> son:
      <ul>
        <?php foreach ($datosDePais["ciudades"] as $ciudades) : ?>
          <li><?=$ciudades?></li>
        <?php endforeach; ?>
      </ul>
    </li>
  <?php endif; ?>
<?php endforeach; ?>


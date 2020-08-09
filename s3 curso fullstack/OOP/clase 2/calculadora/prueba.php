<?php

include('operable.php');
include('suma.php');
include('resta.php');
include('multiplicacion.php');
include('division.php');
include('calculadora.php');

// // // $suma1 = new Suma();
// // // $resta1 = new Resta();
// // // $multiplicacion1 = new Multiplicacion();
// // $division1 = new Division();

// echo $suma1->operar(2,3);
// echo "<br>";
// echo $resta1->operar(2,3);
// echo "<br>";
// echo $multiplicacion1->operar(2,3);
// echo "<br>";
// echo $division1->operar(2,3);
// echo "<br>";

$calculadora = new Calculadora(Calculadora::SUMA, 2,3);

$mili = $calculadora->makeOperacion();

var_dump($calculadora);
var_dump($mili);
var_dump($mili->operar());
 ?>

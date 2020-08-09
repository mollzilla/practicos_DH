<?php
include('operable.php');
include('OperacionFactory.php');
include('suma.php');    




// Crear un archivo main.php que incluya la clase calculadora. Dado esto lograr que devuelva:
// El resultado de 1 + 2

$calculadora1 = new Calculadora(Calculadora::SUMA, 1, 2);

var_dump($calculadora1->operar());

// El resultado de 10 - 5
// El resultado de 100 * 7
// El resultado de 500 / 20

$calculadora2 = new Calculadora(Calculadora::SUMA, 10,5);

var_dump($calculadora2->operar(10,5));



?>
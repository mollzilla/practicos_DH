<?php
include_once('imprimible.php');
include_once('cliente.php');
include_once('liquidable.php');
include_once('cuenta.php');
include_once('pyme.php');
include_once('multinacional.php');
include_once('persona.php');
include_once('banco.php');

$cuenta1 = new Classic(123123123);


$cuenta1->setBalance(3000);
$cuenta1->setFechaUltMovimiento('2016/09/28'); // $date = '2016/09/28';

var_dump($cuenta1);

$persona1 = new Persona("mili", "rey", "documento", "22-6-1984", "mili@mili.com", "123123123", $cuenta1);

var_dump($persona1);

$persona1->pagarBanco();

var_dump($persona1);

$empresa1 = new Pyme("acme", "321321321");

$empresa1->setCuenta($cuenta1);

$empresa1->pagarBanco();

var_dump($empresa1);

$empresa2 = new Multinacional("vandalay", "5300", "mili, angel y puccini");

$empresa2->setCuenta($cuenta1);

$empresa2->pagarBanco();

$empresa2->liquidarHaberes($persona1, 0);

$empresa2->setRazonSocial("vandalay");

var_dump($empresa2);


echo $persona1->mostrar() . "<br>";
echo $empresa1->mostrar(). "<br>";
echo $empresa2->mostrar(). "<br>";
echo $cuenta1->mostrar(). "<br>";



echo "<br>";

//probando liquidarHaberes

echo $empresa2->getCuenta()->getBalance();
 var_dump( $persona1->getCuenta()->getBalance());
echo "mili";
$empresa2->liquidarHaberes($persona1, 3000);
var_dump( $persona1->getCuenta()->getBalance());

$empresa1->liquidarHaberes($persona1, 8000);
var_dump($empresa1->getCuenta()->getBalance());

echo "<br>";

echo $empresa2->getCuenta()->getBalance();

$clientes = [$persona1, $empresa1, $empresa2];

$banco1 = new Banco($clientes);

var_dump($banco1);

$miliBank = new Banco($clientes);

$miliBank->addClientes($persona1);
$miliBank->addClientes($empresa1);
$miliBank->addClientes($empresa2);

var_dump($miliBank);

var_dump($miliBank->buscarPersona("mili"));

var_dump($miliBank->buscarPersona("mili")->getCuenta()->getBalance());

$miliBank->buscarPersona("mili")->pagarBanco();

var_dump($miliBank->buscarPersona("mili")->getCuenta()->getBalance());



 ?>

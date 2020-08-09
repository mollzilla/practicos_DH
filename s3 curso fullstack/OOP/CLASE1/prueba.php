<?php
 declare(strict_types=1);

include('usuario.php');
include('celular.php');
include('habilidad.php');

echo "todo bien";

$mili = new Usuario(15, "mili", "mili", "mili@mili.com");

var_dump($mili);

var_dump($mili->getEdad());

$mili->setEdad(35);

echo $mili->getEdad();

$mili->setContrasena("mili");
echo $mili->getContrasena();

$mili2 = new Usuario(36, "mili2", "mili2", "mili2@mili.com");

var_dump($mili2);

$mili->setEmail("otro@mili.com");
$mili2->setEmail("otro2@mili.com");
$mili2->setEdad(36);

echo $mili->getEmail(). "<br>";
echo $mili2->getEmail(). "<br>";

echo $mili->edad. "<br>";
echo $mili2->edad. "<br>";

$mili->saludar();

$celular1 = new Celular("apple", "s11", "claro", 123123123);

$celular2 = new Celular("jawawei", "3", "movistar", 321321321);

var_dump($celular1);

$mili->setCelular($celular1);

var_dump($mili);

var_dump($celular2);

echo $celular2->getNumero();

$mili2->setCelular($celular2);

var_dump($mili2);

$mili2->saludar();

echo "<br>";

echo $mili->mostrartelefono();
echo $mili2->mostrartelefono();

echo "<br>";

echo $mili2->llamar($mili, 15);

$hab1 = new Habilidad("cantar", 9);
$hab2 = new Habilidad("piano", 6);
$hab3 = new Habilidad("codear", 7);
$hab4 = new Habilidad("cocina", 9);
$hab4 = new Habilidad("cocina", 9);

$hab5 = new Habilidad("gym", 3);
$hab6 = new Habilidad("leer", 5);

$mili->addHabilidades($hab1);
$mili->addHabilidades($hab2);
$mili->addHabilidades($hab3);

var_dump($mili);

$mili2->addHabilidades($hab4);
$mili2->addHabilidades($hab5);
$mili2->addHabilidades($hab6);

var_dump($mili2);

echo $mili2->sabeHacer("cocinar", 6);
var_dump( $mili2->sabeHacer("gym", 2));

$mili->guardar();
$mili2->guardar();


// $mili->ver();


function retornarTodosLosUsuarios() {
  $todosLosUsuariosJSON = file_get_contents('usuarios.json');
  $todosLosUsuarios = json_decode($todosLosUsuariosJSON);
  return $todosLosUsuarios;

}
var_dump(file_get_contents('usuarios.json', true));
var_dump(retornarTodosLosUsuarios());



 ?>

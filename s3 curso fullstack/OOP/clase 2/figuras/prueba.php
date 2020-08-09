<?php

include_once("comparable.php");
include_once( 'dibujable.php');
include_once("figura.php");
include_once("rectangulo.php");
include_once("circulo.php");
include_once("triangulo.php");
?>

<h4>Rectangulo</h4>

<?php
$rectangulo1 = new Rectangulo(200,100);

echo $rectangulo1->getPerimetro(). "<br>";
echo $rectangulo1->getArea(). "<br>";

echo "<hr>";
?>

<h4>Circulo</h4>

<?php
$circulo1 = new Circulo(30);

echo $circulo1->getPerimetro(). "<br>";
echo $circulo1->getArea(). "<br>";

echo "<hr>";
?>

<h4>Triangulo</h4>

<?php

$triangulo1 = new Triangulo(100,120,90);

echo $triangulo1->getArea(). "<br>";
echo $triangulo1->getPerimetro();

echo "<hr>";
?>

<h4>Equals</h4>

<?php
echo "Instancia de triangulo es " . $triangulo1->equals($rectangulo1);

echo "<br>";

echo "Instancia de triangulo es " . $triangulo1->equals($triangulo1);

echo "<br>";

echo "Instancia de Circulo es " . $circulo1->equals($triangulo1);

echo "<br>";

echo "Instancia de Circulo es " . $circulo1->equals($circulo1);

echo "<br>";

echo "Instancia de Rectangulo es " . $rectangulo1->equals($circulo1);

echo "<br>";

echo "Instancia de Rectangulo es " . $rectangulo1->equals($rectangulo1);

?>

<h4>=, == y equals</h4>

<?php
$rectangulo2 = new Rectangulo(10,20);

echo($rectangulo1 == $rectangulo1);
echo($rectangulo1 == $rectangulo2);
if ($rectangulo1 === $rectangulo1) {
  echo "son ===";
} else {
  echo "no son === <br>";
}


?>

<h4>Dibujables</h4>
<div class="" style='position:relative; left:300px;'>


<?php
echo $circulo1->dibujar();
// echo "Instancia de Rectangulo es " . ;
// echo "<br>";
// echo "Instancia de Rectangulo es " . $rectangulo1 == $rectangulo2;
// echo "<br>";
//
// echo "<hr>";
//
// echo "Instancia de Rectangulo es " . $rectangulo1 === $rectangulo1;
// echo "<br>";
// echo "Instancia de Rectangulo es " . $rectangulo1 === $rectangulo2;
// echo "<br>";
?>
</div>

<div class="" style="position:fixed; left:300px;">
<?php
echo $triangulo1->dibujar();
 ?>

</div>

<div class="">
<?php
echo $rectangulo1->dibujar();
 ?>

</div>

<?php
 ?>

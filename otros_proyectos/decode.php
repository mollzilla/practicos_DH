<?php
    /*Just for your server-side code*/
    header('Content-Type: text/html; charset=ISO-8859-7');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


<?php

/*
https://www.computrabajo.com.ar/ofertas-de-trabajo/oferta-de-trabajo-de-programadores-resolve-el-desafio-en-mendoza-A8CCB9C98EE3CA6461373E686DCF3405
Desafío para desarrolladores!

Si te interesa participar postulate a la búsqueda. Por favor no olvides comentar cuál fue tu razonamiento y programas utilizados para llegar al resultado.
El ejercicio es para resolver de forma individual, cualquier duda que tengas podrás enviarla posteriormente por email.
__________________________

Decodificar el siguiente texto

Σ Φ Ψ Ξ Δ λ Ψ Δ Λ Σ Φ Δ λ Ψ ξ Δ ϗ Ξ Δ Φ Ψ Ξ ϑ λ Ψ Λ Σ Θ ϑ Ξ ϗ Φ ϑ λ Ψ Σ Ξ Ψ λ ϑ Ξ Ψ ζ β Σ φ Δ Ψ Σ Φ Ψ Σ Ξ Ψ ξ Λ ϗ Ξ Ξ ϑ Ψ ϖ Σ Ξ Ψ Π Σ ϖ Λ Σ φ Δ Ξ Ψ Ω Ψ Π Λ Σ Φ ϖ ϗ ϖ ϑ Ψ Δ Ψ Ξ Δ Ψ Θ Δ φ ϗ Δ Ψ ϖ Σ Ψ Ξ ϑ λ Ψ Γ Δ Θ ϗ Φ ϑ λ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ λ Ψ ξ Δ Φ ϖ Σ Λ Δ Ψ ϖ Σ Ψ Φ ϗ Σ ξ Ξ Δ Ψ λ β Ψ Π ϑ Φ Γ Ρ ϑ Ψ Δ Ξ Ψ α ϗ Σ Φ μ ϑ Ψ Ξ ϑ Ψ λ Δ Ξ β ϖ Δ Φ Ψ Ξ Δ λ Ψ ε Ξ Δ β μ Δ λ Ψ ϖ Σ Ξ Ψ Π Δ ζ ϑ Φ Δ Ξ Ψ Ω Ψ Δ Φ ϗ Θ Δ Φ ϖ ϑ Ψ Ξ Δ Ψ μ Λ ϑ Π Δ Ψ Π Δ Λ Ψ Σ λ ϑ λ Ψ Γ Σ Λ Λ ϑ λ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Ξ Δ λ Ψ Π Σ Φ Δ λ Ψ Ω Ψ Ξ Δ λ Ψ α Δ η β ϗ μ Δ λ Ψ λ Σ Ψ α Δ Φ Ψ Π Δ Λ Ψ Ξ Δ Ψ Θ ϗ λ Θ Δ Ψ λ Σ Φ ϖ Δ Ψ Ξ Δ λ Ψ Π Σ Φ Δ λ Ψ λ ϑ Φ Ψ ϖ Σ Ψ Φ ϑ λ ϑ μ Λ ϑ λ Ψ Ξ Δ λ Ψ α Δ η β ϗ μ Δ λ Ψ λ ϑ Φ Ψ Δ ζ Σ Φ Δ λ

*/

//el caracter mas usado en espaniol es la e. Seguido de la a.



//guardo la info a decodificar en una variable
 //$data = "Σ Φ Ψ Ξ Δ λ Ψ Δ Λ Σ Φ Δ λ Ψ ξ Δ ϗ Ξ Δ Φ Ψ Ξ ϑ λ Ψ Λ Σ Θ ϑ Ξ ϗ Φ ϑ λ Ψ Σ Ξ Ψ λ ϑ Ξ Ψ ζ β Σ φ Δ Ψ Σ Φ Ψ Σ Ξ Ψ ξ Λ ϗ Ξ Ξ ϑ Ψ ϖ Σ Ξ Ψ Π Σ ϖ Λ Σ φ Δ Ξ Ψ Ω Ψ Π Λ Σ Φ ϖ ϗ ϖ ϑ Ψ Δ Ψ Ξ Δ Ψ Θ Δ φ ϗ Δ Ψ ϖ Σ Ψ Ξ ϑ λ Ψ Γ Δ Θ ϗ Φ ϑ λ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ λ Ψ ξ Δ Φ ϖ Σ Λ Δ Ψ ϖ Σ Ψ Φ ϗ Σ ξ Ξ Δ Ψ λ β Ψ Π ϑ Φ Γ Ρ ϑ Ψ Δ Ξ Ψ α ϗ Σ Φ μ ϑ Ψ Ξ ϑ Ψ λ Δ Ξ β ϖ Δ Φ Ψ Ξ Δ λ Ψ ε Ξ Δ β μ Δ λ Ψ ϖ Σ Ξ Ψ Π Δ ζ ϑ Φ Δ Ξ Ψ Ω Ψ Δ Φ ϗ Θ Δ Φ ϖ ϑ Ψ Ξ Δ Ψ μ Λ ϑ Π Δ Ψ Π Δ Λ Ψ Σ λ ϑ λ Ψ Γ Σ Λ Λ ϑ λ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Ξ Δ λ Ψ Π Σ Φ Δ λ Ψ Ω Ψ Ξ Δ λ Ψ α Δ η β ϗ μ Δ λ Ψ λ Σ Ψ α Δ Φ Ψ Π Δ Λ Ψ Ξ Δ Ψ Θ ϗ λ Θ Δ Ψ λ Σ Φ ϖ Δ Ψ Ξ Δ λ Ψ Π Σ Φ Δ λ Ψ λ ϑ Φ Ψ ϖ Σ Ψ Φ ϑ λ ϑ μ Λ ϑ λ Ψ Ξ Δ λ Ψ α Δ η β ϗ μ Δ λ Ψ λ ϑ Φ Ψ Δ ζ Σ Φ Δ λ ";
/* foreach (count_chars($data, 1) as $i => $val) {
   echo "Se ha encontrado $val instancia (s) de \"" , chr($i) , "\" en la cadena.\n";
    echo "<pre>";
    echo chr($i);
}


echo $data*/?>








 ?>
 <body>
 <?php $data = "Σ Φ Ψ Ξ Δ λ Ψ Δ Λ Σ Φ Δ λ Ψ ξ Δ ϗ Ξ Δ Φ Ψ Ξ ϑ λ Ψ Λ Σ Θ ϑ Ξ ϗ Φ ϑ λ Ψ Σ Ξ Ψ λ ϑ Ξ Ψ ζ β Σ φ Δ Ψ Σ Φ Ψ Σ Ξ Ψ ξ Λ ϗ Ξ Ξ ϑ Ψ ϖ Σ Ξ Ψ Π Σ ϖ Λ Σ φ Δ Ξ Ψ Ω Ψ Π Λ Σ Φ ϖ ϗ ϖ ϑ Ψ Δ Ψ Ξ Δ Ψ Θ Δ φ ϗ Δ Ψ ϖ Σ Ψ Ξ ϑ λ Ψ Γ Δ Θ ϗ Φ ϑ λ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ λ Ψ ξ Δ Φ ϖ Σ Λ Δ Ψ ϖ Σ Ψ Φ ϗ Σ ξ Ξ Δ Ψ λ β Ψ Π ϑ Φ Γ Ρ ϑ Ψ Δ Ξ Ψ α ϗ Σ Φ μ ϑ Ψ Ξ ϑ Ψ λ Δ Ξ β ϖ Δ Φ Ψ Ξ Δ λ Ψ ε Ξ Δ β μ Δ λ Ψ ϖ Σ Ξ Ψ Π Δ ζ ϑ Φ Δ Ξ Ψ Ω Ψ Δ Φ ϗ Θ Δ Φ ϖ ϑ Ψ Ξ Δ Ψ μ Λ ϑ Π Δ Ψ Π Δ Λ Ψ Σ λ ϑ λ Ψ Γ Σ Λ Λ ϑ λ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Σ Ξ Ψ Δ Λ Λ ϗ Σ Λ ϑ Ψ α Δ Ψ Ξ Δ λ Ψ Π Σ Φ Δ λ Ψ Ω Ψ Ξ Δ λ Ψ α Δ η β ϗ μ Δ λ Ψ λ Σ Ψ α Δ Φ Ψ Π Δ Λ Ψ Ξ Δ Ψ Θ ϗ λ Θ Δ Ψ λ Σ Φ ϖ Δ Ψ Ξ Δ λ Ψ Π Σ Φ Δ λ Ψ λ ϑ Φ Ψ ϖ Σ Ψ Φ ϑ λ ϑ μ Λ ϑ λ Ψ Ξ Δ λ Ψ α Δ η β ϗ μ Δ λ Ψ λ ϑ Φ Ψ Δ ζ Σ Φ Δ λ ";

  $dataEnLatin = "S Ph Ps X D l Ps D L S Ph D l Ps x D ϗ X D Ph Ps X ϑ l Ps L S Th ϑ X ϗ Ph ϑ l Ps S X Ps l ϑ X Ps z v S ph D Ps S Ph Ps S X Ps x L ϗ X X ϑ Ps ϖ S X Ps P S ϖ L S ph D X Ps O Ps P L S Ph ϖ ϗ ϖ ϑ Ps D Ps X D Ps Th D ph ϗ D Ps ϖ S Ps X ϑ l Ps G D Th ϗ Ph ϑ l Ps S X Ps D L L ϗ S L ϑ Ps a D Ps S X Ps D L L ϗ S L ϑ Ps a D Ps S l Ps x D Ph ϖ S L D Ps ϖ S Ps Ph ϗ S x X D Ps l v Ps P ϑ Ph G R ϑ Ps D X Ps a ϗ S Ph m ϑ Ps X ϑ Ps l D X v ϖ D Ph Ps X D l Ps e X D v m D l Ps ϖ S X Ps P D z ϑ Ph D X Ps O Ps D Ph ϗ Th D Ph ϖ ϑ Ps X D Ps m L ϑ P D Ps P D L Ps S l ϑ l Ps G S L L ϑ l Ps S X Ps D L L ϗ S L ϑ Ps a D Ps S X Ps D L L ϗ S L ϑ Ps a D Ps X D l Ps P S Ph D l Ps O Ps X D l Ps a D i v ϗ m D l Ps l S Ps a D Ph Ps P D L Ps X D Ps Th ϗ l Th D Ps l S Ph ϖ D Ps X D l Ps P S Ph D l Ps l ϑ Ph Ps ϖ S Ps Ph ϑ l ϑ m L ϑ l Ps X D l Ps a D i v ϗ m D l Ps l ϑ Ph Ps D z S Ph D l";

  $latinDataEnArray = explode(' ', $dataEnLatin);

//var_dump($latinDataEnArray);

  /*$array2 = array_unique($latinDataEnArray);
  var_dump($array2);
  echo "<br>";*/

$ocurrencias = [];
  foreach ($latinDataEnArray as $caracter) {
    $ocurrencias[] =   count(array_keys($latinDataEnArray, $caracter));
  }


var_dump($ocurrencias);
echo "<br>";



// arsort() - sort associative arrays in descending order, according to the value

asort($ocurrencias, SORT_NUMERIC);

var_dump($ocurrencias);
echo "<br>";
/*
$cantidades = array_values($ocurrencias);

var_dump($cantidades);

//$cantidades= sort($cantidades);

var_dump($cantidades);




*/
?>
 </body>
 </html>

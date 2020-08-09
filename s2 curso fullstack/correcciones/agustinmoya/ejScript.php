<?php

// NOTE: Ejercicio 10
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

Crear un script que muestre el nombre de cada país y sus ciudades desde
la variable $ceu con el siguiente formato:

        Las ciudades de Argentina son:

    Buenos Aires
    Córdoba
    Santa Fé

        Las ciudades de Brasil son:

    Brasilia
    Rio de Janeiro
    Sao Pablo

11) A partir del ejercicio anterior:

    Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano. Este valor debe ser true o false.
    Hacer que la impresión anterior no muestre países que no sean Americanos.

IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo por cada país en donde cada
país tendrá los datos de sus ciudades y esAmericano.
*/
echo "Ejercicio 10-11: <br>";
$esAmericano=true;
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

$ceuMas = [
  "Argentina"=> ["ciudades"=>["Buenos Aires", "Córdoba", "Santa Fé"],
                "es_americano"=>true],
  "Brasil" => ["ciudades"=>["Brasilia", "Rio de Janeiro", "Sao Pablo"],
              "es_americano"=>true],
  "Colombia" => ["ciudades"=>["Cartagena", "Bogota", "Barranquilla"],
            "es_americano"=>true],
  "Francia" => ["ciudades"=>["Paris", "Nantes", "Lyon"], "es_americano"=>false],
  "Italia" => ["ciudades"=>["Roma", "Milan", "Venecia"], "es_americano"=>false],
  "Alemania" => ["ciudades"=>["Munich", "Berlin", "Frankfurt"], "es_americano"=>false]
];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Paises y capitales</title>
  </head>
  <body>
      <header>
        <nav>
          <ul>
            <?php // NOTE: Ejercicio 10 ?>
            <?php foreach ($ceu as $key => $value) {
               echo "Las ciudades de $key son:"; ?>
               <?php foreach ($value as $var) {?>
            <li>
                <?php echo $var;?>
            </li>
            <?php } ?>
            <?php } ?>
          </ul>

          <?php // NOTE: Ejercicio 11 ?>
          <ul>
            <?php foreach ($ceuMas as $pais => $datos) {?>

                <?php
                if ($datos["es_americano"] == true) {
              echo "<li>";
                  echo "Las ciudades de $pais son:"?>
                  <ul>
                  <?php foreach ($datos["ciudades"] as $ciudades) {
                    echo "<li>$ciudades</li>";
                  } ?>
                  </ul>
                <?php echo "</li>";
                }?>
            </li>
            <?php }
              ?>
          </ul>

        </nav>
      </header>
  </body>
</html>

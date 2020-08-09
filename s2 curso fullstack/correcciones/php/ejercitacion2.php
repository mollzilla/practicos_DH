<?php
  for ($i = 0; $i <= 100; $i = $i + 2)
  {
    echo $i." ";

  }
  echo "<br>";
  echo "<br>";
  $j = 100;
  while($j > 85)
  {
    $j--;
    echo $j." ";
  }
  echo "<br>";
  echo "<br>";
  $contador = 0;
  while($contador <= 4){
    $contador = $contador + 1;
    echo $contador*2 ." ";
  }
  echo "<br>";
  echo "<br>";
  $max = 1;
  $min = 0;
  $contador = 0;
  $total = 0;
  while ($contador < 5){
    $numeroRandom = rand($max, $min);
    $total++;
    if($numeroRandom == 1){
      $contador++;
    }
  }
  echo $contador;
  echo "<br>";
  echo $total;

  echo "<br>";echo "<br>";

  $nombres = ["manu", "seba", "tomi", "caro", "mili"];
  for($i = 0; $i < count($nombres); $i++)
  {
    echo $nombres[$i]." ";
  }
  echo "<br>";
  $i = 0;
  while($i < count($nombres))
  {
    echo $nombres[$i]." ";
    $i++;
  }
  echo "<br>";
  $i = 0;
  do{
    echo $nombres[$i]. " ";
    $i++;
  }while ($i < count($nombres));
  echo "<br>";
  foreach ($nombres as $nombre)
  {
    echo $nombre. " ";
  }
  echo "<br>";
  echo "<br>";
  $array = [];
  $max = 10;
  $min = 0;
  for($i = 0; $i < 10; $i++)
  {
    $array[] = rand($max, $min);
    if($array[$i] == 5)
    {
      echo "<br> se encntro un 5";
      break;
    }
    echo $array[$i]." ";
  }

  echo "<br>";
  echo "<br>";

  $array2 = [];
  $max2 = 100;
  $min2 = 0;
  $contador = 0;
  $pares = 0;
  echo "numeros del array: ";
  while($contador < 10)
  {
    $array2[] = rand($max2, $min2);
    if($array2[$contador]%2 == 0)
    {
      $pares++;
    }
    echo $array2[$contador]." ";
    $contador++;
  }
  echo "<br>";
  echo "numero pares: $pares";
  echo "<br>";
  echo "<br>";
  function mascotas($animal,$edad,$altura,$nombre){
    $mascota = [
      "animal" => $animal,
      "edad" => $edad,
      "altura" => $altura,
      "nombre" => $nombre
    ];
    foreach($mascota as $clave => $valor){
      echo $clave.": ".$valor."<br>";
    }
  }
  mascotas("gato", " 6", " 1m", " luke");
  echo "<br>";
  echo "<br>";
  $ceu = array(
    "Italia"=>"Roma",
    "Luxembourg"=>"Luxembourg",
    "Bélgica"=> "Bruselas",
    "Dinamarca"=>"Copenhagen",
    "Finlandia"=>"Helsinki",
    "Francia" => "Paris",
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
    foreach ($ceu as $key => $value) {
      echo $key.": ".$value."<br>";
    }
    echo "<br>";
    echo "<br>";
    $ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
    ];
    foreach($ceu as $clave => $valor){
      echo "las ciudades de $clave"." son:"."<br>";
      for($i = 0; $i < count($valor); $i++){
      ?>
      <ul>
        <li><?php echo $valor[$i]."<br>"; ?></li>
      </ul>
      <?php
      }
    }
    echo "<br>";
    echo "<br>";
    $ceu = [
        "argentina" => [
          "prov1" => "Buenos Aires",
          "prov2" => "Córdoba",
          "prov3" => "Santa Fé",
          "americano" => false
         ],

        "brasil" => [
          "prov1" => "Brasilia",
          "prov2" => "Rio de Janeiro",
          "prov3" => "Sao Pablo",
          "americano" => false
        ],

        "colombia" => [
          "prov1" => "Cartagena",
          "prov2" => "Bogota",
          "prov3" => "Barranquilla",
          "americano" => false
        ],

        "francia" => [
          "prov1" => "Paris",
          "prov2" => "Nantes",
          "prov3" => "Lyon",
          "americano" => true
        ],

        "italia" => [
          "prov1" => "Roma",
          "prov2" => "Milan",
          "prov3" => "Venecia",
          "americano" => true
        ],

        "alemania" => [
          "prov1" => "Munich",
          "prov2" => "Berlin",
          "prov3" => "Frankfurt",
          "americano" => true
        ]
    ];
    foreach($ceu as $clave => $valor){
      echo "las ciudades de $clave"." son:"."<br>";
      foreach ($valor as $key => $value){
        if ($key == "americano" && $value == false){
         foreach ($valor as $key2 => $value2) {
              ?><ul>
                  <li><?php echo $value2."<br>"; ?></li>
                </ul> <?php
         }
        }
      }
    }

    echo "<br>";
    echo "<br>";
    function nombreCompleto($nombre, $apellido){
      echo "$nombre $apellido";
    }
    nombreCompleto("manu", "cabrerizo");


  ?>

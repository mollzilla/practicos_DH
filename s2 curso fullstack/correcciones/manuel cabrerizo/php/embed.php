<?php
  $nombre = "Manuel";
  $max = 1;
  $min = 0;
  $numeroRandom = rand($max, $min);
  function ejercicio2($numero){
    if($numero == 1){
      echo "es usted un ganador? SI";
    }elseif($numero == 0){
      echo "es usted un ganador? NO";
    }
  }
  function nav($pag1, $pag2, $pag3)
  {
    $barra = [$pag1, $pag2, $pag3];
    for ($i=0; $i < count($barra); $i++)
    {
      if($i == 0){
        ?> <li><a href=" <?php echo $barra[$i]; ?>">google</a></li> <?php
      }elseif($i == 1){
        ?> <li><a href=" <?php echo $barra[$i]; ?>">facebook</a></li> <?php
      }elseif ($i == 2) {
        ?> <li><a href=" <?php echo $barra[$i]; ?>">twitter</a></li> <?php
      }
    }
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?php echo $nombre ?></h2>
    <h3>¿Es usted un ganador?</h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php nav("https://google.com", "https://facebook.com", "https://twitter.com"); ?>
    </ul>
    <?php ejercicio2($numeroRandom); ?>
  </body>
</html>

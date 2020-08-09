<?php
//TP PHP NUMERO 1
  $persona = [];
  $persona["nombre"] = "jon";
  $persona["apellido"] = "snoooow";
  $persona["edad"] = 27;
  $persona["hobbies"] = ["netflix", "futbol", "programar"];
  var_dump($persona);
  ?>
  <br>
  <br>
  <br>
  <?php
  $persona["edad"] = 25;
  $persona["direccion"] = "winterfell";
  $persona["hobbies"][] = "golf";
  var_dump($persona);
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $num1 = -30;
  $num2 = 20;
  if ($num1 > $num2) {
    echo "el numero mayor es: $num1";
  }elseif ($num1 < $num2) {
    echo "el numero mayor es: $num2";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  $numero = rand(1,5);
  if ($numero == 3 || $numero == 5) {
    echo $numero;
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  $numero = rand(1,5);
  if ($numero == 3) {
    echo $numero;
  }else {
    echo "el numero no es tres";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  $numero2 = rand(1,100);
  if ($numero2 > 50){
    echo "el numero es mayor a 50";
  }elseif ($numero2 < 50) {
    echo "el numero es menor a 50";
  }else {
    echo "el numero es 50";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  $nombreDeUsuario = "admin";
  $contrasenaDeUsuario ="asd";
  if ($nombreDeUsuario == "admin" && $contrasenaDeUsuario == 1234) {
    echo "bienvenido";
  }else {
    echo "error de login;";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";
  if ($nombreDeUsuario == "admin" && $contrasenaDeUsuario == 1234) {
    echo "bienvenido";
  }else {
    echo "error de login;"; echo "<br>";
    if ($nombreDeUsuario == null || $contrasenaDeUsuario == null) {
      echo "debe llenar el nombre o  contrasena";
    }elseif ($nombreDeUsuario != "admin") {
      echo "el nombre de usuario es incorrecto";
    }elseif ($contrasenaDeUsuario != 1234) {
      echo "la contrasena es incorrecta";
    }
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $edad = 2;
  $casado = true;
  $sexo = "masculino";
  if($sexo == "otro"){
    echo "bienvenido";
  }
  elseif($edad >= 18 && $casado == false){
    echo "bienvenido";
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $cantidadDeAlumnos = -100;
  if($cantidadDeAlumnos){
    echo "true";
    echo "<br> termina imprimiendo true si es positivo o negativo";
  }
  else{
    echo "false";
    echo "<br> escribe false si es cero";
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $numero = 32;
  $resultado = ($numero%2==0) ? "el numero $numero es par" : "el numero $numero es impar";
      echo $resultado;
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $nota = 3;
    switch ($nota) {
        case 1:
          echo "desaprobado";
          break;
        case 2:
          echo "desaprobado";
          break;
        case 3:
          echo "desaprobado";
          break;
        case 4:
          echo "zafamos";
          break;
        case 5:
          echo "zafamos";
          break;
        case 6:
          echo "bien";
          break;
        case 7:
          echo "bien";
          break;
        case 8:
          echo "bien";
          break;
        case 9:
          echo "muy Bien";
          break;
        case 10:
          echo "exelente";
          break;
        default :
          echo "no es valido";
          break;

    }
  ?>

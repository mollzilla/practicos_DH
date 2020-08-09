<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php


    /* Ejercicio 1-------------------*/
    echo "<br>";

    $persona = [
        "nombre" => "John",
        "apellido" => "Snow",
        "edad" => 27,
        "hobbie" => ["futbol", "netflix", "programar"]
    ];
    $persona["hobbie"][] = "bicicleta";

    $persona["direccion"] = "winterfell";

    var_dump($persona);


    /* Ejercicio 2----------*/
    echo "<br>";

    $numero1 = 12;
    $numero2 = 29;

    if ($numero1 < $numero2) {
        echo "El número mayor es" . " " . $numero1;
    } else {
        echo "El numero mayor es" . " " . $numero2;
    }
    echo "<br>";
    echo "<hr>";

    /*Ejercicio 2---------------*/
    echo "<br>";
    echo "<hr>";

    $numeroramdon = rand(1, 5);
    if ($numeroramdon == 3 or $numeroramdon == 5) {
        echo "El numero aleatorio es:  " . $numeroramdon;
    }


    /*Ejercicio 3------------*/
    echo "<br>";
    echo "<hr>";
    if ($numeroramdon != 3) {
        echo "el número no es 3";
    } else {
        echo "el número es  3 @!!";
    }

    echo "<br>";
    echo "<hr>";
    /*Ejercicio 4<<<<<<<<<<<<<<<<<<<<<<<< ----------------------*/

    $numeroramdon2 =  rand(1, 100);

    if ($numeroramdon2 > 50) {
        echo "el número es menor a 50";
    } elseif ($numeroramdon2 < 50) {
        echo "el número es mayor a 50";
    } else {
        echo "bingo el número es 50!";
    }

    echo "<br>";
    echo "<hr>";

    /*Ejercicio 5<<<<<<<<<<<<<<<<<<<<<-----------------------*/

    $nombreDeUsuario = "admin";
    $ContraseniaDeUsuario = "1234";

    if ($nombreDeUsuario && $ContraseniaDeUsuario) {
        echo "!BIENVENIDO!";
    } else {
        echo " Error";
    }
    if ($nombreDeUsuario == "" || $ContraseniaDeUsuario == "") {
        echo "Verifique su información";
    } else {
        if ($nombreDeUsuario != "admin") {
            echo "Nombre de usuario incorrecto";
        } else if ($ContraseniaDeUsuario != "1234") {
            echo "Contraseña incorrecta";
        }
    }
    echo "<br>";
    echo "<hr>";

    /*Ejercicio 6.....-------------------------------------*/

    $edad = 18;
    $casado = false;
    $sexo = "Masculino";

    if ($edad == 18 && $casado == false) {
        echo "Bienvenido";
    }

    echo "<br>";
    echo "<hr>";

    /*Ejercicio 7-------------------------------------*/
    echo "<br>";
    echo "<hr>";

    $cantidadDeAlumnos = 99;
    if ($cantidadDeAlumnos) {

        echo “true”;
    } else {

        echo “false”;
    }


    echo "<br>";
    echo "<hr>";

    /*Ejercicio 8-----------------------------------------*/

    $numero = 88;
    $resultado = ($numero % 2 == 0) ? "Numero par" : "Numero impar";
    echo $resultado;

    echo "<br>";
    echo "<hr>";

    /*Ejercicio 9----------------------------------------*/
    $nota = rand(0,11);
    switch ($nota) {
        case '0':
            echo "Desaprobado";
            break;
        case '1':
            echo "Desaprobado";
            break;
        case '2':
            echo "Desaprobado";
            break;
        case '3':
            echo "Desaprobado";
            break;
        case '4':
            echo "Zafamos";
            break;
        case '5':
            echo "Zafamos";
            break;
        case '6':
            echo "Bien";
            break;
        case '7':
            echo "Bien";
            break;
        case '8':
            echo "Bien!!!";
            break;
        case '9':
            echo "MUY bien!!";
            break;
        case '10':
            echo "Excelente!!!!!";
            break;

        default:
            echo "Nota no valida";
            break;
    }

    echo "<br>";
    echo "<hr>";

    /*Ejercicio 10-------------------------------*/
    $nota = -10;
    switch ($nota) {
        case '0':
            echo "Desaprobado";
            break;
        case '1':
            echo "Desaprobado";
            break;
        case '2':
            echo "Desaprobado";
            break;
        case '3':
            echo "Desaprobado";
            break;
        case '4':
            echo "Zafamos";
            break;
        case '5':
            echo "Zafamos";
            break;
        case '6':
            echo "Bien";
            break;
        case '7':
            echo "Bien";
            break;
        case '8':
            echo "Bien!!!";
            break;
        case '9':
            echo "MUY bien!!";
            break;
        case '10':
            echo "Excelente!!!!!";
            break;

        default:
            echo "Nota no valida";
            break;
    }

    ?>
</body>

</html>
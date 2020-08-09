<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- 1.Generar un archivo llamado funciones.php:
Definir una función mayor() que reciba 3 números y devuelva el mayor. -->

<?php 
function mayor($nro1, $nro2, $nro3) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($nro1 > $nro2 && $nro1 > $nro3) {
        return $nro1;
    } elseif ($nro2 > $nro1 && $nro2 > $nro3) {
        return $nro2;
    } else {
        return $nro3;
    }
 
}

function mayor2($nro1, $nro2, $nro3) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;  
    return max($nro1, $nro2, $nro3);  
}

echo mayor(1,2,3) . "<br>";
echo mayor2(3,2,1) . "<br>";

/* Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite. */

function tabla($base, $limite) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $array = [];
    for ($i=$base; $i <= $limite; $i++) { 
        $array[] = $i;
    }

    return $array;
}

var_dump( tabla(3,11));
echo "<br>";

/* Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100. */

function mayor3($nro1, $nro2, $nro3 = 100) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;  
    return max($nro1, $nro2, $nro3);
}


echo mayor3(3,8);
echo "<br>";

/* Modificar tabla para que si recibe un sólo parámetro utilice el número 100. */

function tabla2($base, $limite = 100) {
    global $funcionesEjecutadas;
    $array = [];
    for ($i=$base; $i <= $limite; $i++) { 
        $array[] = $i;
    }
    $funcionesEjecutadas++;  
    return $array;
}

print_r(tabla2(68));

?>






</body>
</html>

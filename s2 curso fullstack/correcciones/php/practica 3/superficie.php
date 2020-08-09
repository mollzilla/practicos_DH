<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- Generar un archivo llamado superficie.php:
Definir una función triangulo() que retorne su superficie. -->

<?php 
    function triangulo($base, $altura) {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;  
        return ($base * $altura) / 2;
    }
    echo triangulo(10,12);
?>

<hr>

<!-- Definir una función rectangulo() que retorne su superficie. -->

<?php 
    function rectangulo($base, $altura) {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;  
        return ($base * $altura);
    }

    echo rectangulo(15, 10);
?>
<hr>
<!-- Definir una función cuadrado() que retorne su superficie. -->

<?php 
    function cuadrado($lado) {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;  
        return ($lado ** 2);
    }

    echo cuadrado(15);
?>
<hr>
<!--Utilizando la función pi(), definir una función circulo() que retorne su superficie. -->

<?php 
    function circulo($radio) {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;  
        return (pi() * $radio ** 2);
    }

    echo circulo(5);
?>

<hr>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas. -->

    <?php   
            $funcionesEjecutadas = 0;

            echo "Funciones Ejecutadas: $funcionesEjecutadas <hr>";

    
            include "funciones.php";
            include "superficie.php";
            
        function mayorSuperficie($radio1, $radio2, $radio3) {
            $superficie1 = circulo($radio1);
            $superficie2 = circulo($radio2);
            $superficie3 = circulo($radio3);

            return mayor($superficie1, $superficie2, $superficie3);
        }
        
        echo mayorSuperficie(5,3,2);
        ?>

    <!-- Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido? ¿Qué sucede? 

    En caso de que el ejercicio anterior haya fallado, modificar la variable con la palabra reservada global para que sí funcione.

    Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, a mi también me encanta php!"-->
    <hr>
    
    <?php 
        echo strpos("Me encanta php, a mi tambien me encanta php!","php");
    
    ?>
        
        
        
        
</body>
</html>
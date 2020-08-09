<?php 
/* 
Persistencia y Validación
1. Añadiremos validación para el formulario de registración. Para esto les sugerimos
algunos factores para tener en cuenta:
a. Una buena estrategia es que el formulario de registración haga un pedido por
POST hacia el mismo archivo. Esto permite que primero validemos y luego lo
enviemos a la página de éxito.
b. Es importante validar primero que nada si el usuario envió información. */

if ($_POST) {
    
/* c. Si el usuario efectivamente envió información vamos a querer validar campo
por campo tomando el enfoque de “preguntar si hay un error en el campo”.*/
    $errores = [];

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    if (strlen($_POST["nombre"]) == 0) {
        $errores[] = "Por favor ingresa un nombre";
        $_POST["nombre"] = '';
    } else {$nombnre = $_POST[$nombre];}

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Por favor ingresa un correo valido";
        
    }

    if (!is_numeric($_POST["edad"])) {
        $errores[] = "Por Favor ingresa un numero en tu edad";
        
    }

   

    if (count($errores) == 0) { 
      
        header('location: exito.php'); } ELSE {
             ?>
        <ul>
        <?php foreach ($errores as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach;  }?>
        </ul>
        
        
 

<!-- d. Es importante acumular todos los errores para poder mostrarlos de forma
ordenada en el HTML.
e. Si tras todas las validaciones no hay ningún error, podemos redirigir al
usuario a la página de éxito.
■ Para redirecciones ver header(“Location…”)
2. En caso de que el formulario traiga errores queremos persistir los datos que el
usuario ya había enviado en el formulario.
a. ¡En una segunda versión sería ideal persistir sólo aquellos campos que no
hayan tenido errores! -->

<?php } # fin de if $_POST ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persistencia y Validacion</title>
</head>
<body>
    
    <form action="persistenciayvalidacion.php" method="post">  
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php $nombre?>"> 
    <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="<?php $email?>">    
    <br>
        <label for="edad">Edad:</label>
        <input type="text" name="edad" value="<?php $edad?>">    
    <br>
        <input type="submit">
    </form>

</body>
</html>


<?php
$errores = [];
$nombre = null;
$email = null;
$color = null;

if ($_POST) {

  if (strlen($_POST["nombre"]) == 0) {
    $errores[] = "el nombre";
  } else {
    $nombre = $_POST["nombre"];
  }


  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores[] = "el email";
  } else {
    $email = $_POST["email"];
  }

  if (strlen($_POST["color"]) == 0) {
    $errores[] = "elegi color";
  } else {
    $color = $_POST["color"];
  }



  if (empty($errores)) {
    setcookie('color', $color, time() + 60);
    header('location: imprimir.php');
  }


}

?>
 <!-- Persistencia y Validación
// 1. Añadiremos validación para el formulario de registración. Para esto les sugerimos
// algunos factores para tener en cuenta:
// a. Una buena estrategia es que el formulario de registración haga un pedido por
// POST hacia el mismo archivo. Esto permite que primero validemos y luego lo
// enviemos a la página de éxito.
// b. Es importante validar primero que nada si el usuario envió información.
// c. Si el usuario efectivamente envió información vamos a querer validar campo
// por campo tomando el enfoque de “preguntar si hay un error en el campo”.
// d. Es importante acumular todos los errores para poder mostrarlos de forma
// ordenada en el HTML.
// e. Si tras todas las validaciones no hay ningún error, podemos redirigir al
// usuario a la página de éxito.
// ■ Para redirecciones ver header(“Location…”)
// 2. En caso de que el formulario traiga errores queremos persistir los datos que el
// usuario ya había enviado en el formulario.
// a. ¡En una segunda versión sería ideal persistir sólo aquellos campos que no
// hayan tenido errores! -->




<!-- Crear el archivo formulario.html en la misma carpeta que el anterior, con el
siguiente código y acceder al mismo: -->
<!DOCTYPE HTML>
<html>
<body>
<form action="formulario.php" method="get">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<input type="submit">
</form>

<!-- Modificar el archivo del punto 2 para que envíe los datos a través de POST. ¿Cómo
deberíamos modificar imprimir.php para que siga funcionando y podamos ver los
datos que enviamos? -->





<br>
<br>

<h3>Formulario por $_POST</h3>
<form action="formulario.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value="<?= $nombre ? $nombre : ""?>">
<br>
<label for="color">Color:</label>
<input type="text" name="color" value="<?= $color ? $color : ""?>">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email" value="<?= $email ? $email : ""?>">
<br>
<input type="submit">
</form>

<?php if ($errores): ?>
<ul>
  <?php foreach ($errores as $error): ?>
    <li><?=$error?></li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
</body>
</html>

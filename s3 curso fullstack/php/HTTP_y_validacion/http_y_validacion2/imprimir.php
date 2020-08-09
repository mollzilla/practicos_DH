<?php if ($_POST){
  setcookie('color', '', -1);
  header('location: imprimir.php');
} ?>


<!-- Crear el archivo imprimir.php que imprima la variable $_GET a través de un
var_dump y acceder al mismo con el siguiente Query String:
imprimir.php?nombre=montoto&email=montoto@digitalhouse.com -->

<?php var_dump($_GET); ?>
<?php var_dump($_COOKIE); ?>

<!-- a. ¿Qué sucede ahora en imprimir.php si enviamos el formulario con datos?
b. Modificar imprimir.php para que imprima algún valor puntual (por ejemplo el
nombre) de $_GET.
c. Modificar imprimir.php para que imprima todos los valores utilizando un
foreach. -->

<?php if (isset($_GET["email"])): ?>
  <h3>El mail ingresado es <?=$_GET["email"]?></h3>
<?php endif; ?>

<ul>
<?php foreach ($_GET as $key => $value): ?>
  <li>el <?=$key ?> ingresado es <?=$value ?></li>
<?php endforeach; ?>
</ul>

<br>


<?php var_dump($_POST); ?>
<h4>Datos por $_POST</h4>
<?php if (isset($_POST)): ?>
  <ul>
  <?php foreach ($_POST as $key => $value): ?>
    <li>el <?=$key ?> ingresado es <?=$value ?></li>
  <?php endforeach; ?>
  </ul>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title></title>
  </head>
  <body style="background-color: <?=(!empty($_COOKIE['color'])) ? $_COOKIE['color'] : '' ?>">
<h1>este es el body</h1>

<form class="" action="imprimir.php" method="post">
  <div class="">
    <input type="submit" name="cookie" value="Resetear Color">
  </div>
</form>
  </body>
</html>

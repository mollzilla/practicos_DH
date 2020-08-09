<!-- Crear el archivo imprimir.php que imprima la variable $_GET a través de un
var_dump y acceder al mismo con el siguiente Query String:
imprimir.php?nombre=montoto&email=montoto@digitalhouse.com -->

<?php var_dump($_GET) ?>
<?="<br>"?>
<?php var_dump($_POST) ?>

<?php if (isset($_GET["submit"])): ?>


<h1>HTTP y formularios</h1>

<ul>
  <li><?=$_GET["nombre"] ?></li>
  <li><?=$_GET["email"] ?></li>
</ul>

<!-- c. Modificar imprimir.php para que imprima todos los valores utilizando un
foreach. -->
<h3>con Foreach</h3>
<ul>
  <?php foreach ($_GET as $clave => $valor): ?>
    <?php if ($clave == "submit"): continue; ?>
    <?php else : ?>
    <li>Mi <?=$clave?> es <?=$valor ?></li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>

<?php endif; ?>
<h3>con $_POST</h3>

<?php var_dump($_POST) ?>

<ul>
  <?php foreach ($_POST as $clave => $valor): ?>
    <li>Mi <?=$clave?> es <?=$valor ?></li>
  <?php endforeach; ?>
</ul>


<!-- 4. Probar la función de php getAllHeaders() e imprimir su resultado. ¿Qué
encontramos? -->

<?php var_dump(getAllHeaders()) ?>

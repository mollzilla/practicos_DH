<!-- Crear un archivo perfil.php que manteniendo la estetica del sitio muestre la
información del usuario según un parámetro dado por GET. Por ejemplo
perfil.php?email=dario@digitalhouse.com debería mostrar la información del
usuario con el email en el queryString. En caso de haberle agregado id al usuario,
utilizar este como parámetro de búsqueda. -->

<?php

$usuariosJson = file_get_contents("usuarios.json");

$usuarios = json_decode($usuariosJson, true);

$usuarioBuscado = [];

var_dump($usuarios); //mostramos los datos en un var_dump para asegurarnos de que se decodearon bien

$usuarioBuscado = [];

foreach ($usuarios as $usuario) {
  foreach ($usuario as $clave => $valor) {
    if ($_GET["email"] == $valor) {
      $usuarioBuscado = $usuario;
    }
  }
}

?>

<h4>Datos del usuario buscado</h4>
<img src="fotos/<?= $usuarioBuscado["foto"] ?>" alt="">
<ul>
  <?php foreach ($usuarioBuscado as $clave => $valor): ?>
    <?php if ($clave == "pass"): continue;?>
    <?php else: ?>
      <li>Su <?=$clave?> es <?=$valor?></li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>

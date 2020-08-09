<!--3. Hacer una página listadoUsuarios.php que tenga un listado de todos los usuarios.
Cada uno debe ser un hipervínculo a la página perfil.php con el detalle de cada
usuario -->
<?php

$usuariosJson = file_get_contents("usuarios.json");

$usuarios = json_decode($usuariosJson, true);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h2>Listado de Usuarios</h2>


  <?php foreach($usuarios as $usuario) :  ?>
      <ul>
        <li>Nombre de Usuario: <?= $usuario["nombre"] ?></li>
        <li>Email de Usuario: <?= $usuario["email"] ?></li>
        <li>Foto de Usuario: <br>
          <img src="fotos/<?= $usuario["foto"] ?>" alt="" style="height:80px; width:80px;">
        </li>
      </ul>

  <?php endforeach; ?>


  </body>
</html>

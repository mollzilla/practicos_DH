<?php

require_once("funciones.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mi Perfil</title>
  </head>
  <body>
    
<div class="container my-4 py-5 bg-light text-primary border border-primary">
<h1 class="text-center">Tabla de Usuarios - Trabajo Practico Manejo de Archivos</h1>

<div class="row my-4 ">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border border-primary py-3">

        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Foto</th>
            <?php foreach ($datosEnArray as $usuario) : ?>
            <tr class="table-info">
                <td><?= $usuario[1]?></td>
                <td><?= $usuario[2]?></td>
                <td><img src="archivos/<?= $usuario[3]?>" class="img-fluid img-thumbnail"></td>
            </tr>
            <?php endforeach; ?>
            </tr>
            
        </table>


    
    </div>



</div>
</div>
</body>
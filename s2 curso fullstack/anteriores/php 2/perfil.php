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
<h1 class="text-center">Mi Perfil - Trabajo Practico Manejo de Archivos</h1>

<div class="row my-4 ">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border border-primary">


    <div class="row my-4 ">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border border-primary">
<form action="perfil.php" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Ingresa el Email cuyo Perfil buscas</label>
    <input type="email" name="email" class="form-control" id="exampleInputName" aria-describedby="name" placeholder="email"  >
    <button type="submit" class="btn btn-primary my-3">Submit</button>
  </div>
  
<?php if (!empty($persona)) : ?>
    <ul class="list-group text-center mb-2">
       
    <li class="list-group-item list-group-item-success">Usuario: <?=$persona[1]?></li>
    <li class="list-group-item list-group-item-info">Email: <?=$persona[2]?></li>
    <li class="list-group-item list-group-item-info">Avatar: <img src="archivos/<?= $persona[3]?>" class="img-fluid img-thumbnail"></li>
    

    </ul>
<?php endif; ?>
</div>
</div>

</div>





</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
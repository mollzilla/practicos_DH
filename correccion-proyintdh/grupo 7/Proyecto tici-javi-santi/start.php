<?php
  require("funciones.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Encuesta</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container register-form">
     <main>
       <!-- <div class="errors"> -->
          <!-- <ul> -->
          <!-- <?php //foreach ($error as $key => $value): ?> -->
          <!-- <li><?php //echo $value ?></li> -->
          <!-- <?php //endforeach ?> -->
        <!-- </ul> -->
       <!-- </div> -->
       <form action="home.php" method="POST">
         <div class="form-group">
           <label for="nombre">Nombre</label>
           <?php if (isset($error["nombre"])): ?>
           <p class="errors"><?php echo $error["nombre"] ?></p>
         <?php endif; ?>
           <input type="nombre" name="nombre" id="exampleInputNombre">
         </div>
         <div class="form-group">
           <label for="apellido">Apellido</label>
           <?php if (isset($error["apellido"])): ?>
           <p class="errors"><?php echo $error["apellido"] ?></p>
         <?php endif; ?>
           <input type="apellido" name="apellido" id="exampleInputApellido">
         </div>
         <div class="form-group" >
         <label for="edad">Edad</label>
         <?php if (isset($error["edad"])): ?>
         <p class="errors"><?php echo $error["edad"] ?></p>
       <?php endif; ?>
         <input type="edad" name="edad" id="exampleInputEdad">
       </div>
         <div class="form-group">
         <label for="exampleInputEmail1">Email address</label>
         <?php if (isset($error["email"])): ?>
         <p class="errors"><?php echo $error["email"] ?></p>
       <?php endif; ?>
         <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group" >
  <label for="n_tarjeta">Numero de Tarjeta</label>
  <?php if (isset($error["n_tarjeta"])): ?>
  <p class="errors"><?php echo $error["n_tarjeta"] ?></p>
  <?php endif; ?>
  <input type="n_tarjeta" name="n_tarjeta" id="exampleInputn_tarjeta">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <?php if (isset($error["pass"])): ?>
    <p class="errors"><?php echo $error["pass"] ?></p>
  <?php endif; ?>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
  </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
     </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

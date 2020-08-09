<?php require_once("head.php") ;   
if(!empty($_POST)) {
  
}
?>
    
<div class="container my-4 py-5 bg-light text-primary border border-primary">
<h1 class="text-center">Trabajo Practico Manejo de Archivos</h1>

<div class="row my-4 ">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border border-primary">
<form action="register.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputName" aria-describedby="name" placeholder="Tu Nombre" value="<?= isset($_POST["nombre"]) ? $_POST["nombre"] : '' ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email" value="<?= isset($_POST["email"]) ? $_POST["email"] : '' ?>">
    <small id="emailHelp" class="form-text text-muted">Esto es simplemente un trabajo practico</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirma Password</label>
    <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="check" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="form-group">
    <label for="foto">Ingresa tu foto</label>
    <input type="file" class="form-control" name="foto" id="foto">
    </div>
  <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
</div>

<div class="card mt-4 col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="width: 18rem;">
   <div class="card-body">
    <?php if (!empty($errores)) {  
     foreach ($errores as $error) : ?>
        <h5 class="text-center card-title text-danger"><?=$error?></h5>
<?php endforeach; } ?>
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
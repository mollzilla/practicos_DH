<?php

/* 3. Partiendo de agregarPelicula.php modificarlo para que al enviarse el formulario
inserte una nueva película en la base de datos utilizando statements. Sugerencia:
crear un nuevo archivo (ej: guardar.php) en donde esté toda la lógica del proceso.

a. Sumarle a agregarPelicula.php un <select> con todos los géneros
existentes en nuestra DB, para poder elegir el mismo. */

include("guardar.php");
include("head.php");

 ?>
    <h1>Agregar Pelicula</h1>

      <?php if(!empty($mensaje)) : ?>
        <h4><?= $mensaje ?></h4>
      <?php endif; ?>

      <form action="agregarpelicula.php" method="post">
        <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
          <label for="rating">Rating</label>
          <input type="text" class="form-control" id="rating" name="rating">
        </div>
        <div class="form-group">
          <label for="premios">Premios</label>
          <input type="text" class="form-control" id="premios" name="premios">
        </div>
        <div class="form-group">
          <label for="duracion">Duracion</label>
          <input type="text" class="form-control" id="duracion" name="duracion">
        </div>
        <div class="form-group">
          <label for="rating">Genero</label>
            <select class="form-control" name="genero" id="exampleFormControlSelect1">
              <?php foreach ($generos as $genero): ?>
                <option value="<?=$genero["id"]?>"><?=$genero["name"]?></option>
              <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" name="submit" class="btn btn-primary"></button>
      </form>

    </div>
  </body>
</html>

<?php

include("logicabuscador.php");
include("head.php");
/*

  4. Armar un buscador de SERIES o PELICULAS, el mismo archivo debe servir para
  buscar cualquier de las dos opciónes, por ejemplo a través de un radio-button,
  preguntar al usuario qué desea buscar y luego de eso, realizar la consulta a la DB.
  Generar errores si no se seleccionó el tipo de búsqueda y así mismo si la busqueda
  no arrojo resultados */

?>
      <h1>Buscador de Peliculas y series</h1>

     <div class="container">
       <form action="buscador.php" method="get">

         <div class="form-group">
            <label for="radio">Peliculas</label>
            <input type="radio" name="quebuscar" value="movies" aria-label="Radio button for following text input">
        </div>
        <div class="form-group">
           <label for="radio">Series</label>
           <input type="radio" name="quebuscar" value="series" aria-label="Radio button for following text input">
        </div>
         <div class="form-group">
           <label for="titulo">Palabra Clave</label>
           <input type="text" class="form-control" id="titulo" name="titulo">
         </div>

         <input type="submit" name="submit" class="btn btn-primary"></button>
       </form>



    <div class="">
      <?php if (empty($errores)): ?>
        <?php if (isset($_GET["submit"])): ?>
          <?php if ($_GET['quebuscar'] == 'series') { ?>
            <table>
              <tr>
                <th>Id</th>
                <th>Creado</th>
                <th>Modificado</th>
                <th>Titulo</th>
                <th>Lanzada</th>
                <th>Cancelada</th>
                <th>Id de Genero</th>
              </tr>
              <?php foreach ($resultados as $resultado): ?>
                <tr>
                  <td><?=$resultado["id"]?></td>
                  <td><?=!$resultado["created_at"] ? "desconocido" : $resultado["created_at"]?></td>
                  <td><?=!$resultado["updated_at"] ? "desconocido" : $resultado["updated_at"]?></td>
                  <td><a href="series.php"><?=$resultado["title"]?></a></td>
                  <td><?=$resultado["release_date"]?></td>
                  <td><?=$resultado["end_date"]?></td>
                  <td><?=$resultado["genre_id"]?></td>
                </tr>
              <?php endforeach; ?>

            </table>
          <?php  } else if ($_GET['quebuscar'] == 'movies'): ?>
            <table>
              <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Rating</th>
                <th>Premios</th>
                <th>Lanzada</th>
                <th>Longitud</th>
                <th>Id de Genero</th>
              </tr>
              <?php foreach ($resultados as $resultado): ?>
                <tr>
                  <td><?=$resultado["id"]?></td>
                  <td><?=!$resultado["title"] ? "desconocido" : $resultado["title"]?></td>
                  <td><?=!$resultado["rating"] ? "desconocido" : $resultado["rating"]?></td>
                  <td><?=$resultado["awards"]?></td>
                  <td><?=$resultado["release_date"]?></td>
                  <td><?=$resultado["genre_id"]?></td>
                  <td><?=$resultado["genre_id"]?></td>
                </tr>
              <?php endforeach; ?>

            </table>
          <?php endif; ?>
        <?php endif; ?>
      <?php else : ?>
        <h3><?=$errores?></h3>
      <?php endif; ?>
    </div>
     </div>

</div>
   </body>
  </html>

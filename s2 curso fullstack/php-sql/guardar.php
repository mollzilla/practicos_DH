<?php

include("practico.php");
include("head.php");

$consultaGeneros = $conexion->prepare("SELECT id, name FROM genres;");
$consultaGeneros->execute();
$generos = $consultaGeneros->fetchAll(PDO::FETCH_ASSOC);

$mensaje = "";

if (isset($_POST["submit"])) {

  if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo']; }
  if (isset($_POST['rating'])) {
    $rating = $_POST['rating']; }
  if (isset($_POST['premios'])) {
    $premios = $_POST['premios']; }
  if (isset($_POST['duracion'])) {
    $duracion = $_POST['duracion']; }
  if (isset($_POST['genero'])) {
    $genero = $_POST['genero']; }


//    8. Modificar agregarPelicula.php para que valide que el título no se encuentre repetido.

  $consultaMovies = $conexion->prepare("SELECT id, title FROM movies WHERE title = '$titulo';");
  $consultaMovies->execute();
  $movies = $consultaMovies->fetch(PDO::FETCH_ASSOC);

  if(!empty($movies)) {

/*    $mensaje = "La pelicula seleccionada ya existe";

} else {*/

/* 9. Modificar una vez más agregarPelicula.php para que si el título de la película ya
existe, solo actualize el resto de los datos.*/

  if ($_POST['titulo'] == $movies["title"]) {

    $guardar = $conexion->prepare("UPDATE movies
                                  SET
                                    rating = '$rating',
                                    awards = '$premios',
                                    length = '$duracion',
                                    genre_id = '$genero'
                                  WHERE
                                    title = '$titulo';");
    $guardar->execute();

    $mensaje = "La pelicula fue actualizada con exito";

    } } else {

      $guardar = $conexion->prepare("INSERT INTO movies (title, rating, awards, length, genre_id)
                                    VALUES ('$titulo', '$rating', '$premios', '$duracion' , '$genero');");
      $guardar->execute();
      $mensaje = "La pelicula fue guardada con exito";

      }
    }

 ?>

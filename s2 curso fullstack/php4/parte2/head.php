<?php
session_start();
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

    <title>Practica Session</title>
  </head>
  <body>

    <header>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline w-100">
                <div class="d-flex justify-content-around w-100">    
                <button class="btn btn-outline-info mr-3" type="button"><a href="modificar.php">Modificar</a></button>
                <button class="btn btn-outline-info" type="button"><a href="mostrar.php"></a>Mostrar</button>
                </div>
            </form>
        </nav>
    </header>


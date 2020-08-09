<?php
require_once("head.php");


/* mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe).
En este archivo se debe imprimir el valor actual de contador */ ?>

<div class="container">


    <?php if (isset($_SESSION["counter"])) : ?>
        <button type="button" class="btn btn-danger"><?= $_SESSION["counter"] ?></button>
    <?php else : ?>
        <button type="button" class="btn btn-danger">No parece haber nada por aqui...</button>
    <?php endif ?>

</div>
<?php
require_once("head.php");

/* b. modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe
poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y
debe incrementar su valor en 1. Probar las modificaciones en mostrar.php */

if (!empty($_POST)) {
    incrementar($vez);
    reiniciar($rein);
}

?>

<div class="container">

    <form action="modificar.php" method="post">
        <input type="submit" name="reiniciar" class="btn btn-danger" value="Reiniciar">
    </form>
    <form action="modificar.php" method="post">
        <input type="submit" name="incrementar" class="btn btn-danger" value="Incrementar">
    </form>

</div>
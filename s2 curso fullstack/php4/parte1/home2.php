<?php

/*Una vez que han sido enviadas las cookies, se puede acceder a ellas en la próxima carga de la página gracias a los arrays $_COOKIE o $HTTP_COOKIE_VARS. Nótese que las superglobales tales como $_COOKIE están disponibles a partir de PHP 4.1.0. El valor de las cookies también está en $_REQUEST. */
include("head.php");

// var_dump($_POST);

if (isset($_POST["resetear"])) {
    setcookie("color", "", time() - 15);
    setcookie("nombre", "", time() - 15);
}
setcookie("color", $_POST["color"], time() + 15);
setcookie("nombre", $_POST["nombre"], time() + 15);
if (isset($_COOKIE["color"])) {
    echo "si";
} else { }
if (isset($_COOKIE["nombre"])) {
    echo "si";
} else { }
?>

<div class=container style="background-color:<?= $_COOKIE["color"]; ?>">

    <h1>Bienvenido <?= $_COOKIE["nombre"] ?></h1>


    <marquee behavior="" direction="">este es un marquee</marquee>

    <form action="home2.php">
        <input type="submit" name="resetear">Resetear
    </form>




</div>
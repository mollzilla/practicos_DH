<?php


$vez = isset($_POST["incrementar"]);  

$rein = isset($_POST["reiniciar"]);

function incrementar($vez)
{

    if ($vez) {
        var_dump($_SESSION["counter"]);
        $_SESSION["counter"] = $_SESSION["counter"] + 1;
        var_dump($_SESSION["counter"]);
    }
}

function reiniciar($rein)
{
    if ($rein) {
        $_SESSION["counter"] = 0;
    }
}

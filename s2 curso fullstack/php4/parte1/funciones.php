<?php
if (!empty($_POST)) { 
    guardarUsuario();
}

function guardarUsuario()
{
    $datosEnJson = file_get_contents("archivo.json");

    $datosEnArray = json_decode($datosEnJson, TRUE);

    $id = 0;
    $nombre = "";
    $email = "";

    if (!empty($datosEnArray)) {
        $ultimousuario = end($datosEnArray);
        die($ultimousuario);
        $id = $ultimousuario["id"] + 1;
    }

    $usuario = [
        "id" => $id,
        "nombre" => $nombre,
        "email" => $email
    ];

    $usuarioEncodeado = json_encode($usuario);

    file_put_contents("archivo.json", $usuarioEncodeado, FILE_APPEND);
}

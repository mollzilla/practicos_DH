<!-- Modificar register.html/register.php para que:
a. Guarde los datos del usuario en un array. (la contraseña debe estar
encriptada!)
b. Convierta el array en JSON.
c. Guarde el usuario en un archivo de texto.

Además, se considera que el formulario de registración ya se encuentra validado. -->

<?php
$errores = [];
$nombre = null;
$email = null;
$pass = null;
$id = null;
$extension = null;

if ($_POST) {
  if (strlen($_POST["nombre"]) == 0) {
    $errores[] = "ingrese nombre";
  } else {
    $nombre = $_POST["nombre"];
  }

  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores[] = 'el campo email no es valido';
  } else {
    $email = $_POST["email"];
  }

  if (strlen($_POST["pass"]) < 8) {
    "La contrasena debe ser mas larga que 8";
  } else {
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
  }


//


// Nota: La registración es un proceso que se ejecuta muchas veces, por lo tanto,
// cada usuario nuevo, debe agregarse al final del array de usuarios. Es
// recomendable que el archivo contenga una estructura de tipo:
// {“usuarios”: [{...},{...},{...},{...},{...}]} en donde {...} es el json_encode del array
// con los datos del usuario particular que se registra en el momento del
// guardado.

$usuariosJson = file_get_contents("usuarios.json");

$usuarios = json_decode($usuariosJson, true);

if(empty($usuarios)) {
  $id = 0;
} else {
  $id = (count($usuarios));
}

/*
1. Utilizando los formularios de registro ya creados, register.php/.html agregarle
funcionamiento para que pueda subir una imágen de perfil.
Tener en cuenta que es necesario guardar junto con los datos del usuario el nombre del
archivo para poder referenciar posteriormente. Se recomienda renombrar el archivo
subido por el id del usuario. (En caso de no tenerlo aún, agregarle un id al usuario. El
primero tendrá como id el número 1, el segundo el número 2 y así continuará la
secuencia…). Si el email fuese un campo único, también podría utilizarse esto
 */

if ($_FILES) {
  if ($_FILES["foto"]["error"] != 0) {
    $errores[] = "Hubo un error en la subida de archivo";
  }

  $extension = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);

  if ($extension != "jpg" && $extension != "jpeg" && $extension != "png") {
    $errores[] = "El archivo no es un archivo de imagen valido";
  }


if (empty($errores)) {

  $nombreFoto = "foto" . $id . "." . $extension;

  move_uploaded_file($_FILES["foto"]["tmp_name"], "fotos/".$nombreFoto);

  $usuario = ["id" => $id,
            "nombre" => $nombre,
            "email" => $email,
            "pass" => $pass,
            "foto" => $nombreFoto
              ];


  $usuarios[] = $usuario;

  // b. Convierta el array en JSON.

  $usuarioJson = json_encode($usuarios);

  // c. Guarde el usuario en un archivo de texto.

  file_put_contents("usuarios.json", $usuarioJson);

// Además, se considera que el formulario de registración ya se encuentra validado. -->

} //end if de si hay errores
} // end if de foto
} // end if post
 ?>

<!DOCTYPE HTML>
<html>
<body>
<form action="registracion.php" method="post" enctype="multipart/form-data">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre">
<br>
<label for="pass">Contrasena:</label>
<input type="password" name="pass">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<label for="foto">Foto:</label>
<input type="file" name="foto">
<br>
<input type="submit" name="submit">
</form>

<ul>
  <?php foreach ($errores as $error): ?>
    <li><?=$error?></li>
  <?php endforeach; ?>
</ul>

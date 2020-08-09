<?php /*Utilizando los formularios de registro ya creados, register.php/.html agregarle
funcionamiento para que pueda subir una imágen de perfil.
Tener en cuenta que es necesario guardar junto con los datos del usuario el nombre del
archivo par`a poder referenciar posteriormente. Se recomienda renombrar el archivo
subido por el id del usuario. (En caso de no tenerlo aún, agregarle un id al usuario. El
primero tendrá como id el número 1, el segundo el número 2 y así continuará la
secuencia…). Si el email fuese un campo único, también podría utilizarse esto. */ ?>


<?php $errores = [];

$archivo = 'datos.json';
$datosEnJson = file_get_contents($archivo);
$datosEnArray = json_decode($datosEnJson, true);
$idUsuario = 0;




if (!empty($datosEnArray)) {
    end($datosEnArray);         // move the internal pointer to the end of the array
    $idUsuario = key($datosEnArray) + 1;  // fetches the key of the element pointed to by the internal pointer
    
} 


if(!empty($_POST)) {
    if (strlen($_POST["nombre"]) == 0) {
        $errores[] = "Por favor ingresa un nombre";
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Por favor ingresa un correo valido";
    }

    if (strlen($_POST["pass1"]) == 0 || strlen($_POST["pass1"]) == 0) {
        $errores[] = "Por favor ingresa un password en ambos campos";
    } else if ((isset($_POST["pass1"])) && isset($_POST["pass2"]) && ($_POST["pass1"] !== $_POST["pass2"])) {
        $errores[] = "Ambos Passwords deben ser iguales";
    }

    if ($_FILES["foto"]["error"] !== 0) {
        $errores[] = "Hubo un error en la subida del archivo";
    } else {
    
        $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
            
        if (($ext !== "jpg" && $ext !== "jpeg" && $ext !== "png")) {
        $errores[] = "La extension del archivo no es valida";
    }
     else {
        move_uploaded_file($_FILES["foto"]["tmp_name"], "archivos/" . $idUsuario . "foto." . $ext);
    }
    }

    

    $archivo = 'datos.json';
    $datosEnJson = file_get_contents($archivo);
    $datosEnArray = json_decode($datosEnJson, true);

  
    

    //aca podria contar los datos y darle un id segun el count    

      $array = [];
      $password = password_hash($_POST["pass1"], PASSWORD_DEFAULT);
      $nombre = $nombre = trim($_POST["nombre"]);
      $email = $_POST["email"];
      $avatar = $idUsuario . "foto." . $ext;
      

    
      if (empty($errores)) {

        $array = [$password, $nombre, $email, $avatar];

        $datosEnArray[$idUsuario] = $array;

        $datosEnJson = json_encode($datosEnArray);
        file_put_contents($archivo, $datosEnJson);

        $datosEnArray = json_decode($datosEnJson, true);

        echo "<pre>";
        var_dump($datosEnArray);



      
    }

            

} # Fin del IF Post

$persona = [];

if(!empty($_GET)) {    
    foreach ($datosEnArray as $usuario) {
        foreach ($usuario as $dato) {
            if ($dato == $_GET["email"]) {
                $persona = $usuario;
            }
        }
    }

} # fin de If get


?>
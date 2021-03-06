<?php
$usuarioEncontrado="";
//0=email correcto contraseña incorrecta
//1=email incorrecto
//-1=usuario logueado correctamente
if($_POST){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $json=file_get_contents("../data/usuarios.txt");
    $info=json_decode($json,true);
    $usuario="";
    if(count($info)>0){
        for($i=0;$i< count($info);$i++){
            if($info[$i]["email"] == $email){
                if(password_verify($password,$info[$i]["password"])){
                    $usuarioEncontrado=-1;
                    $usuario=$info[$i];
                    break;
                }
                else{
                    $usuarioEncontrado=0;
                    break;
                }
            }
            else{
                $usuarioEncontrado=1;

            }
        }
    }
    if($usuarioEncontrado==-1){
        session_start();
        $_SESSION["usuario"]=$usuario;
        header('Location:./../usuario/perfil1.php');
    }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/stylePrincipal.css">
  <link rel="shortcut icon" href="img\logo.png" />
</head>
 <body>
     <div class="container-fuild">
       <?php include ("../componentes/navbar.php") ?>

            <div class="modal-body">
            <?php if($usuarioEncontrado==0):?>
                <p>Contraseña incorrecta</p>
            <?php elseif($usuarioEncontrado==1):?>
                <p>Email no registrado o incorrecto</p>
            <?php endif;?>

                <form action="loguear.php" method="post" class="loguearse">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" aria-label="email" placeholder="Ingrese email" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" aria-label="password" placeholder="Ingrese contraseña" required>
                </div>
                <p>
                <input type="checkbox" name="" value=""> Recordarme</p>
                <button type="submit" class="btn btn-danger btn-lg btn-block my-3 ">Iniciar Sesión</button>
                </form>
                <p class="text-center"> <a href="#" >¿Has olvidado tu contraseña? </a></p>
                <p class="text-center mt-3">¿No tienes cuenta?<button class="btn btn-success my-2 my-sm-0  bg-ligth border-0 register" data-toggle="modal" data-target="#modalRegistro">Registrate</button>
                </p>
                </div>



                  <?php include ("../componentes/footer.php") ?>
        </div>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/918d19c8b4.js" crossorigin="anonymous"></script>
 </body>
 </html>

<?php
$error=[];
$nombre=isset($_POST["nombre"])? $_POST["nombre"] : "";
$edad=isset($_POST["edad"])? $_POST["edad"] : "";
$apellido=isset($_POST["apellido"])? $_POST["apellido"] : "";
$email=isset($_POST["email"])? $_POST["email"] : "";
$pass=isset($_POST["pass"])? $_POST["pass"] : "";
if($_POST){
  //validar Nombre
  if(!$nombre){
    $error["nombre"]= "Debe ingresar su nombre.";
  }else if(strlen($nombre)<2){
    $error["nombre"]="El nombre debe tener minimo 2 caracteres.";
  }
  //validar Apellido
  if(!$apellido){
    $error["apellido"]= "Debe ingresar su apellido.";
  }else if(strlen($apellido)<2){
    $error["apellido"]="El apellido debe tener minimo 2 caracteres.";
  }
  //validar Edad
  if(!$edad){
    $error["edad"]= "Debe ingresar su edad.";
  }else if($_POST["edad"]<18){
    $error["edad"]= "Debe ser mayor de edad para registrarse.";
}
//validar numero de Tarjeta
if(!$n_tarjeta){
  $error["n_tarjeta"]= "Debe ingresar su numero de tarjeta.";
}else if(strlen($n_tarjeta)<=16){
  $error["n_tarjeta"]="El numero de tarjeta debe tener minimo 16 caracteres.";
 //validar el email
  if(!$email){
    $error["email"]= "Debe ingresar un email.";
  }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error["email"]="El mail debe tener un formaato valido.";
  }
//validar el Password
if(!$pass){
  $error["pass"]= "Debe ingresar una contraseña.";
}else if(strlen($pass)<8){
  $error["pass"]="La contraseña debe tener minimo 8 caracteres.";
}
}
 ?>

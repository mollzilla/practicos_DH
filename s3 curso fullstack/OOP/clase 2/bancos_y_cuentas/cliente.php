<?php

//Defino variables privadas para la clase Cliente


abstract class Cliente implements Imprimible{

  Protected $email;
  Protected $pass;
  Protected $cuenta;

//Creo una función constructora con sus parámetros necesarios

// Hacer los cambios necesarios en el Cliente, para que pueda tener una cuenta asociada. (Concepto de composición). Agregar la asignación de la cuenta en el constructor.

  public function __construct($email,$pass, $cuenta){

    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  public function setCuenta($cuenta){
    $this->cuenta = $cuenta;
  }
  public function getCuenta(){
    return $this->cuenta;
  }

  public abstract function pagarBanco();

  public function mostrar(){
    return "hola";
  }

}

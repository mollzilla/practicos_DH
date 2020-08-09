<?php

// include_once("cliente.php");

class Persona extends Cliente {

  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  public function __construct($nombre, $apellido, $documento, $nacimiento, $email, $pass, $cuenta) {

    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;

  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }

  public function pagarBanco() {
    $balance = $this->cuenta->getBalance();
    switch ($this->cuenta) {
      case $this->cuenta instanceof Classic:
        $balance = $balance - 100;
      break;
      // Si el cliente tiene cuenta Gold, el banco cobra $10 por cada letra del apellido del cliente o $5 por cada letra de la razón social.
      case $this->cuenta instanceof Gold:
        for ($i = 0; $i < strlen($this->apellido); $i++) {
          $balance = $balance - 10;
        }
      break;
      case $this->cuenta instanceof Platinum:
        // Si el cliente tiene una cuenta Platinum el banco cobra un 10% del total del balance de la cuenta.
        $balance = $balance - $this->cuenta->getBalance()/10;
      break;
      case $this->cuenta instanceof Black:
        // Si el cliente tiene una cuenta Black, el banco cobra $500, más $100 multiplicado por el número de día de la semana en la que se hizo la última transacción.
        $nroDiaSem = (intval(date('N', strtotime($this->cuenta->getFechaUltMovimiento()))));
        $balance = $balance - 500 - (100 * $nroDiaSem);
      break;
    }
    $this->cuenta->setBalance($balance);
  }

  public function mostrar(){
    return $this->nombre . " " . $this->apellido;
  }

}

?>

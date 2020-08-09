<?php

// include("cliente.php")

class Multinacional extends Cliente implements Liquidable {

  Private $titulo;
  Private $valorAcciones;
  Private $directorio;
  Private $razonSocial;

  public function __construct($titulo, $valorAcciones, $directorio) {

    $this->titulo = $titulo;
    $this->valorAcciones = $valorAcciones;
    $this->directorio = $directorio;

  }

  public function setTitulo($titulo){
    $this->titulo = $titulo;
  }
  public function getTitulo(){
    return $this->nombre;
  }

  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getRazonSocial(){
    return $this->razonSocial;
  }

  public function setsetValorAcciones($valorAcciones){
    $this->valorAcciones = $valorAcciones;
  }
  public function getDirectorio(){
    return $this->directorio;
  }

  public function pagarBanco() {
    $balance = $this->cuenta->getBalance();
    switch ($this->cuenta) {
      case $this->cuenta instanceof Classic:
        $balance = $balance - 100;
      break;
      // Si el cliente tiene cuenta Gold, el banco cobra $10 por cada letra del apellido del cliente o $5 por cada letra de la razón social.
      case $this->cuenta instanceof Gold:
        for ($i = 0; $i < strlen($this->razonSocial); $i++) {
          $balance = $balance - 5;
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

  public function liquidarHaberes(Persona $persona, $monto) {
    $balance = $this->cuenta->getBalance();
    $balance = $balance - 500;
    $this->cuenta->setBalance($balance);
    $persona->getCuenta()->setBalance($monto);
  }

  public function mostrar(){
    return $this->razonSocial;
  }

}

?>

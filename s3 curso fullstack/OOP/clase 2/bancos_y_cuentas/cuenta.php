<?php
// Crear una clase abstracta Cuenta con atributos: CBU, Balance, Fecha de último movimiento. Agregar setters y getters para obtener los datos de la cuenta. Agregar un constructor que permite inicializar el CBU.
include('classic.php');
include('gold.php');
include('platinum.php');
include('black.php');

abstract Class Cuenta {

  Protected $CBU;
  Protected $balance;
  Protected $fechaUltMovimiento; // $date = '2016/09/28';

  public function __construct($CBU){
    $this->CBU = $CBU;
  }

  public function getCBU() {
    return $this->CBU;
  }
  public function getBalance() {
    return $this->balance;
  }
  public function getFechaUltMovimiento() {
    return $this->fechaUltMovimiento;
  }

  public function setCBU($CBU) {
    $this->CBU  = $CBU;
  }
  public function setBalance($balance) {
    $this->balance  = $balance;
  }
  public function setFechaUltMovimiento($fechaUltMovimiento) {
    $this->fechaUltMovimiento  = $fechaUltMovimiento;
  }

// Agregar un método abstracto para debitar cierto monto que reciba como parámetro el monto y desde donde se está haciendo la transacción (cajero Banelco, cajero Link, caja). Agregar otro método (no abstracto) que permita acreditar cierto monto (y programar su comportamiento). (Tener en cuenta que cada método debe, además, modificar la fecha de último movimiento).

  // public abstract function debitar($monto, origen);

  public function acreditar($monto, $origen, $fecha){
    if ($this->balance) {
      $this->balance = $this->balance + $monto;
      $this->setFechaUltMovimiento($fecha);
      echo "Se acreditaron $" . $monto . " desde " . $origen . " en la fecha " . $fecha;
    }
  }

  public function mostrar(){
    return $this->balance;
  }

}

  ?>

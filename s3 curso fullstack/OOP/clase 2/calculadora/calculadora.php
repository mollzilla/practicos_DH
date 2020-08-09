
<?php

Class Calculadora {

  private $operacion;
  private $num1;
  private $num2;

  const SUMA = 0;
  const RESTA = 1;
  const DIVISION = 2;


  public function __construct($operacion, $num1, $num2){
    $this->operacion = $operacion;
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  public function makeOperacion() {
    // $operacion = new $operacion();

    switch ($this->operacion) {
      case self::SUMA:
        return New Suma($this->num1, $this->num2);
        break;
      case self::RESTA:
        return New Resta();
        break;
      case self::DIVISION:
        return New Division();
        break;
      default:
        echo "operacion equivocada";
        break;
    }
  }

  public function operar(){
    return $this->operacion->operar();;
  }

  public function getNum1(){
    return $this->num1;
  }
  public function setNum1($num1){
    $this->num1 = $num1;
  }

  public function getNum2(){
    return $this->num2;
  }
  public function setNum2($num2){
    $this->num2 = $num2;
  }





}

 ?>

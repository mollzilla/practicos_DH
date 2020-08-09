<?php

// Extender nuevamente a Figura a una nueva clase llamada Circulo que implemente sus métodos correctamente. (Agregar los atributos y métodos necesarios)


Class Circulo extends Figura implements Dibujable {

  protected $radio;

  public function __construct($radio){
    $this->radio = $radio;

  }

  public function getRadio() {
    return ($this->radio);
  }

  public function getPerimetro() {
    return round(pi() * ($this->radio * 2),3) ;
  }

  public function getArea() {
    return round(pi() * pow($this->radio, 2),3);
  }

  public function equals($fig){
    $return = "falso";
    if ($fig instanceof Circulo) {
      if ($fig->getRadio() == $this->radio) {
        $return = "verdadero";
      }
    }
    return $return;
  }

  public function dibujar() {
    $altura = $this->radio * 4;
    return "<svg width='$altura'  height='$altura'>
      <circle cx='50' cy='50' r='$this->radio' stroke='green' stroke-width='4' fill='yellow' />
      </svg>";
  }
}
 ?>

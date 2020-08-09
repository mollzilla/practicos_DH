<!-- Crear una nueva clase llamada Rectangulo, la cual extiende a Figura e implemente sus métodos correctamente. (Agregar los atributos y métodos necesarios) -->

<?php

Class Rectangulo extends Figura implements Dibujable {

  protected $base;
  protected $altura;

  public function __construct($base, $altura){
    $this->base = $base;
    $this->altura = $altura;
  }

  public function getBase() {
    return ($this->base);
  }

  public function setBase($base) {
    $this->base = $base;
  }

  public function getAltura() {
    return ($this->altura);
  }

  public function setAltura($altura) {
    $this->altura = $altura;
  }

  public function getPerimetro() {
    return 2 * ($this->base + $this->altura);
  }

  public function getArea() {
    return $this->base * $this->altura;
  }

  public function equals($fig){
    $return = "falso";
    if ($fig instanceof Rectangulo) {
      if ($fig->getBase() == $this->base && $fig->getAltura() == $this->altura) {
        $return = "verdadero";
      }
    }
    return $return;
  }

  public function dibujar() {
    return "<svg width='$this->base' height='$this->altura'>
      <rect width='$this->base' height='$this->altura' fill='red' stroke-width='3' stroke='rgb(0,0,0)' />
      </svg>";
  }

}
 ?>

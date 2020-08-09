<?php

Class Triangulo extends Figura implements Dibujable {

  protected $ladoA;
  protected $ladoB;
  protected $ladoc;

  public function __construct($ladoA, $ladoB, $ladoC){
    $this->ladoA = $ladoA;
    $this->ladoB = $ladoB;
    $this->ladoC = $ladoC;
  }

  public function getLadoA() {
    return $this->ladoA;
  }

  public function setLadoA($ladoA) {
    $this->ladoA = $ladoA;
  }

  public function getLadoB() {
    return $this->ladoB;
  }

  public function setLadoB($ladoB) {
    $this->ladoB = $ladoB;
  }

  public function getLadoC() {
    return $this->ladoC;
  }

  public function setLadoC($ladoC) {
    $this->ladoC = $ladoC;
  }


  public function getPerimetro() {
    return $this->ladoA + $this->ladoB + $this->ladoC;
  }

  public function getArea() {
    $p = $this->getPerimetro() / 2;

    return sqrt($p * ($p - $this->ladoA) * ($p - $this->ladoB) * ($p - $this->ladoC));
  }

  public function equals($fig){
    $return = "falso";
    if ($fig instanceof Triangulo) {
      if ($fig->getLadoA() == $this->ladoA && $fig->getLadoB() == $this->ladoB && $fig->getLadoC() == $this->ladoC) {
        $return = "verdadero";
      }
    }
    return $return;
  }

  public function dibujar() {

    $arr = ["ladoA" => $this->ladoA, "ladoB" => $this->ladoB, "ladoC" => $this->ladoC];
    arsort($arr);
    // var_dump($arr);
    $ladoA = $arr[key($arr)];

    // echo "<br> lado A es " . $ladoA . "<br>";

    next($arr);
    $ladoB = $arr[key($arr)];
    // echo "<br> lado B es " . $ladoB . "<br>";

    next($arr);
    $ladoC = $arr[key($arr)];
    // echo "<br> lado C es " . $ladoC . "<br>";

    // echo "$ladoA, $ladoB, $ladoC" . "<br>";

    // echo $anguloA . "<br>";
    // echo $anguloB . "<br>";
    // echo $anguloC . "<br>";
    // echo $mili;

    $anguloA = acos(($this->ladoB**2 + $this->ladoC**2 - $this->ladoA**2) / (2 * $this->ladoB * $this->ladoC));
    $anguloB = acos(($this->ladoA**2 + $this->ladoC**2 - $this->ladoB**2) / (2 * $this->ladoA * $this->ladoC));

    $anguloA = $anguloA * (180/pi());
    $anguloB = $anguloB * (180/pi());

    $anguloC = 180.00 - $anguloA - $anguloB;



    $vertice1 = "0,0";
    $vertice2 = "$ladoB, 0";



    $x = $ladoC * cos($anguloA);
    $y = $ladoC * sin($anguloA);
    $vertice3 = "$x, $y";


    return "<svg height='300px'>
      <polygon points=
        '$vertice1 $vertice2 $vertice3'
        fill='red'
        stroke='black'
        stroke-width='2px'/>
    </svg>";


  }

}



 ?>

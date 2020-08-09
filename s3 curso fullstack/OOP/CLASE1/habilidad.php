<?php

// Crear una clase llamada Habilidad. La misma debe tener dos atributos: nombre y
// expertise (expertise es un número entre 0 y 5). Definir los atributos como privados.
// Definir los getters, setters y constructor de la clase.

class Habilidad implements JsonSerializable {

  private $nombre;
  private $expertise;

  public function __construct($nombre, $expertise) {
    $this->nombre = $nombre;
    $this->expertise = $expertise;
  }

  public function jsonSerialize()
   {
       return
       [
           'nombre'   => $this->getNombre(),
           'expertise' => $this->getExpertise()
       ];
    }

  // public function jsonSerialize()
  //    {
  //        $vars = get_object_vars($this);
  //        return $vars;
  //    }

  public function getNombre() {
    return $this->nombre;
  }
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  public function getExpertise() {
    return $this->expertise;
  }
  public function setExpertise($expertise) {
    $this->expertise = $expertise;
  }



}

 ?>

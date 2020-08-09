<?php
declare(strict_types = 1);

/*Crear en un archivo nuevo una clase llamada Celular. La misma debe tener cuatro
atributos: marca, modelo, proveedor de línea y número telefónico. Definir los
atributos como privados. Definir los getters, setters y constructor de la clase*/

class Celular implements JsonSerializable {

  protected $marca;
  protected $modelo;
  protected $proveedorDeLinea;
  protected $numero;

  // public function jsonSerialize()
  //    {
  //        $vars = get_object_vars($this);
  //        return $vars;
  //    }

  public function jsonSerialize()
   {
       return
       [
           'marca'   => $this->getMarca(),
           'modelo' => $this->getModelo(),
           'proveedorDeLinea' => $this->getProveedorDeLinea(),
           'numero' => $this->getNumero()
       ];
    }

    // public function __construct(array $data)
    // {
    //     $this->marca = $data['marca'];
    //     $this->modelo = $data['modelo'];
    //     $this->proveedorDeLinea = $data['proveedorDeLinea'];
    //     $this->numero = $data['numero'];
    // }

  public function __construct($marca, $modelo, $proveedorDeLinea, $numero) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->proveedorDeLinea = $proveedorDeLinea;
    $this->numero = $numero;
  }

  public function setMarca (string $marca) {
    $this->marca  = $marca;
  }
  public function setModelo (string $modelo) {
    $this->modelo  = $modelo;
  }
  public function setProveedorDeLinea (string $proveedorDeLinea) {
    $this->proveedorDeLinea  = $proveedorDeLinea;
  }
  public function setNumero (int $numero) {
    $this->numero  = $numero;
  }

  public function getMarca ():?string {
    return $this->marca;
  }
  public function getModelo ():?string {
    return $this->modelo;
  }
  public function getProveedorDeLinea ():?string {
    return $this->proveedorDeLinea;
  }
  public function getNumero ():?int {
    return $this->numero;
  }


}


 ?>

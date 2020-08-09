<!-- Crear un archivo “banco.php”, que instancie un Banco y lo llene con Clientes (que ya deben tener cuentas a la hora de ser creados). Luego de eso, realizar las operaciones disponibles como prueba, imprimiendo para cada una sobre qué Cliente se hizo y como queda el balance de su Cuenta luego de la operación. -->

<?php

class Banco {

  protected $clientes;

  public function __construct($clientes) {
    foreach ($clientes as $cliente) {
      $this->clientes[] = $cliente;
    }

  }

  public function addClientes($cliente) {
    $this->clientes[] = $cliente;
  }

  public function getClientes(){
    return $this->clientes;
  }

  public function buscarPersona($nombre) {
    $result = null;
    foreach ($this->clientes as $cliente) {
      if ($cliente instanceof Persona && $cliente->getNombre() == $nombre) {
        $result = $cliente;
        break;
      }
    }
    return $result;
  }

// TODO: hacer con pyme y con multinacional

  // public function buscarPyme($razonSocial) {
  //   $result = null;
  //   foreach ($this->clientes as $cliente) {
  //     if ($cliente instanceof Pyme && $cliente->getNombre() == $nombre) {
  //       $result = $cliente;
  //       break;
  //     }
  //   }
  //   return $result;
  // }
  //
  // public function buscarPersona($nombre) {
  //   $result = null;
  //   foreach ($this->clientes as $cliente) {
  //     if ($cliente instanceof Persona && $cliente->getNombre() == $nombre) {
  //       $result = $cliente;
  //       break;
  //     }
  //   }
  //   return $result;
//  }

}


 ?>

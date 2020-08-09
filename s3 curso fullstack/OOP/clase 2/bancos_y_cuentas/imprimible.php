<?php

// Crear una interfaz “Imprimible” que declare un método mostrar. Este método deberá retornar lo que corresponda, según la clase que lo implemente:
// Para Persona, el nombre y apellido.
// Para PYME, la razón social
// Para Multinacional, la razón social.
// Para las cuentas, el balance.

  interface Imprimible {
    public function mostrar();
  }


 ?>

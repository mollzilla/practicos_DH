<?php

include('calculadora.php');
include('operacionFactory.php');

// Aprovechando el código ya generado, crear la clase CalculadoraEnteros que siempre y sin importar la operación devuelva en su método operacion el número redondeado en caso de ser decimal.

class CalculadoraEnteros extends OperacionFactory {

    public function operar() {
        return round($this->operacion->operar($this->num1, $this->num2));
    }

}



?>
<?php
include('calculadora.php');
// Crear una clase OperacionFactory que tenga un método make, el cual recibe un identificador de operacion y construya el objecto Operacion correspondiente. Reemplazar el código del método makeOperacion por el uso de esta clase.


class OperacionFactory {

    public static function make($operacion) {
            switch($operacion) {
                case Calculadora::SUMA:
                    return new Suma();
                    
            }
        
    }
}

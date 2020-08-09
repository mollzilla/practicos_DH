<?php



//     Crear una nueva clase llamada Calculadora que contará con:

class Calculadora {

// Atributo operacion (de tipo objeto que implementa Operable --> esto es lo mismo que decir "de tipo Operable")

    protected $operacion;

// Atributo num1
// Atributo num2
// Método setNum1
// Método setNum2

    protected $num1;
    protected $num2;

    public function setNum1($num1) {
        $this->num1 = $num1;
    }

    public function setNum2($num2) {
        $this->num2 = $num2;
    }
// 3 constantes que representarán las 4 operaciones (‘suma’, ‘resta’, ‘multiplicacion’, ‘division’).

    const SUMA = 0;
    const RESTA = 1;
    const DIVISION = 2;

// Por construcción, se recibe el identificador de la operación y los números a operar.

    public function __construct($operacionARealizar, $num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->makeOperacion($operacionARealizar);
    }

// Método makeOperacion que tomará el identificador de la operación y construirá el objeto que implemente Operable correspondiente.


    public function makeOperacionViejo($operacionARealizar) {
        switch($operacionARealizar) {
            case self::SUMA:
                $this->operacion = new Suma();
                break;
        }
    }

    // (ultimo punto) Reemplazar el código del método makeOperacion por el uso de esta clase.

    public function makeOperacion($operacionARealizar) {
        
            $this->operacion = OperacionFactory::make($operacionARealizar);
    }

// Método operar que devuelve el resultado.

    public function operar() {
        return $this->operacion->operar($this->num1, $this->num2);
    }

}

?>
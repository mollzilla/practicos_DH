<!-- Generar una interfaz “Liquidable” que declare un método liquidarHaberes. Tanto PYME como Multinacional deben implementar “Liquidable”. El método liquidarHaberes recibe una Persona y un monto en donde se le paga a la Persona dicho monto de la cuenta de la empresa.
Dentro de PYME este método cobra un 1% de cada liquidación que desaparecen de la cuenta de la PYME.
Dentro de Multinacional este método cobra un valor fijo de $500 que desaparecen de la cuenta de la Multinacional -->

<?php
interface Liquidable {
  public function liquidarHaberes(Persona $persona, int $monto);


}


 ?>

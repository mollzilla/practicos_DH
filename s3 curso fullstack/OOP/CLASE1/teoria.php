
<?php
// Las mayusculas no son obligatorias en ninguno de los dos casos

class Mili {

}

$mili = new Mili();

var_dump($mili);

class Mili2 {
  public $nombre;
  public $edad;
  public $hobbies;
  public $alumnos;

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setEdad($edad){
    $this->edad=$edad;
  }
  public function getHobbies(){
    return $this->hobbies;
  }
  public function setHobbies($hobby){
    $this->hobbies[] = $hobby;
  }

  public function __construct($nombre, $edad) {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

}

$mili2 = new Mili2("mili", 35);

var_dump($mili2);

$mili3 = new Mili2("mili3", 36);

var_dump($mili3);

// si no les pongo valor a los atributos van a ser de tipo null

$mili2->Setnombre("mili");
$mili2->getEdad();
$mili2->setHobbies("piano");

// si quisiera darle valor a un atributo privado sin el setter me daria error

echo $mili2->nombre;
var_dump($mili2->edad);

var_dump($mili2);

// echo $mili2->nombre(); --> da error porque estoy llamando a un metodo



// Clases e instancias

Class alumno {

  private $nombre;
  private $nota;
  private $profesor;

  public function __Construct($nombre, $nota) {
    $this->nombre = $nombre;
    $this->nota = $nota;
    echo "Se construyo el alumno <br>";
  }

  public function getNombre() {
    return $this->nombre ;
  }
  public function getNota() {
    return $this->nota ;
  }

  public function setNombre(string $nombre) {
    $this->nombre = $nombre;
  }
  public function setNota(int $nota) {
    $this->nota = $nota;
  }

  public function decirLaNota():string {
    return "Mi nota es " .$this->nota;
  }

  public function getProfesor() {
    return $this->profesor ;
  }

  public function setProfesor(mili2 $profesor) {
    $this->profesor = $profesor;
  }

}
$roberto = new Alumno("Roberto", 10);

echo $roberto->decirLaNota();

$roberto->setNota(10);

$roberto->setNombre("Roberto");


  /* atributos
metodos
$this
Scope
Constructor
Relaciones
Type Hinting y return types

*/

$mili2->alumnos[] = $roberto;
echo $mili2->alumnos[0]->decirLaNota();

echo $mili2->alumnos[0]->getNombre();

$roberto->setProfesor($mili2);

var_dump( $roberto->getProfesor());
?>

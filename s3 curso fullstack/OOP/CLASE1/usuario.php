<?php
echo "estoy incluido <br>";

class Usuario  implements JsonSerializable {
  protected $nombre;
  protected $id;
  public $edad;
  protected $contrasena;
  protected $email;
  protected $celular; //--> esto es un objeto
  protected $habilidades; //--> esto es un array de objetos
  //   Agregar en la clase Usuario la posibilidad de que un Usuario pueda tener muchas
  // Habilidades

  public function __construct(int $id, string $nombre, $contrasena, $email) {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->contrasena = PASSWORD_HASH($contrasena, PASSWORD_DEFAULT);
    $this->email = $email;
  }

  public function jsonSerialize()
   {
      $habilidadesSerial = [];
      foreach ($this->habilidades as $habilidad) {
        $habilidadesSerial[] = $habilidad->jsonSerialize();
      }
         return
         [
             'id'   => $this->getId(),
             'modelo' => $this->getNombre(),
             'contrasena' => $this->getContrasena(),
             'email' => $this->getEmail(),
             'celular' => $this->getCelular()->jsonSerialize(),
             'habilidades' => $habilidadesSerial
         ];
    }



  public function getHabilidades() {
    return $this->habilidades;
  }
  public function addHabilidades($habilidad) {
    $this->habilidades[] = $habilidad;
  }

  public function getNombre() {
    return $this->nombre;
  }
  public function getId() {
    return $this->id;
  }

  public function getCelular() {
    return $this->celular;
  }
  public function setCelular(celular $celular) {
    $this->celular = $celular;
  }

  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email) {
    $this->email = $email;
  }

  public function getContrasena() {
    return $this->contrasena;
  }
  public function setContrasena($contrasena) {
    $this->contrasena = PASSWORD_HASH($contrasena, PASSWORD_DEFAULT);
  }

  public function getEdad():?int {
    return $this->edad;
    //return "mili"; para que de error
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  public function setid($id) {
    $this->id = $id;
  }
  public function setEdad(int $edad) {
    $this->edad = $edad;
  }

  public function saludar() {
    echo "Hola " . $this->nombre;
  }

//   Agregar en usuario.php el método mostrarTelefono. El método debe retornar un
// string con una descripción del teléfono incluyendo marca y modelo. Si la marca del
// teléfono es Apple debe agregarse al final del string el texto “ y soy fan de los
// iphones”.

  public function mostrarTelefono() {
    if ($this->celular->getmarca() == "apple") {
      return "El telefono es de marca " . $this->celular->getMarca() ." y soy fan de los iphones" . "<br>";
    }
    return "El telefono es de marca " . $this->celular->getMarca() . "<br>";
  }


// Agregar en usuario.php el método llamar. El mismo debe recibir un Usuario y el
// tiempo de duración de la llamada. La función debe retornar el costo de la llamada. Si
// ambos usuarios cuentan con el mismo proveedor de línea, la llamada es gratis. Si
// esto no es así la llamada cuesta $10 por minuto.

  public function llamar(usuario $usuario, int $duracion) {
    if ($this->celular->getProveedorDeLinea() == $usuario->celular->getProveedorDeLinea()) {
      return 0;
    } else {
      return $duracion * 10;
    }
  }

  // . Agregar en la clase Usuario el método sabeHacer la misma recibe un string y un
  // puntaje. La función devuelve verdadero únicamente si el string recibido es el nombre
  // de una de las habilidades del usuario y si el puntaje es menor al expertise del
  // usuario en esa habilidad. En caso contrario, retorna falso

  public function sabeHacer($nombreHabilidad, $puntaje) {
    $flag = false;
    foreach ($this->getHabilidades() as $habilidad) {
    //  echo $habilidad->getNombre();
    //  echo $habilidad->getExpertise();
      if ($habilidad->getNombre() == $nombreHabilidad && $habilidad->getExpertise() > $puntaje) {
        $flag = true;
      }
    }
    return $flag;
  }

 //  Agregarle al usuario el método guardar. Para esto:
 // a. Queda a criterio del alumno en qué soporte almacenar la información del
 // Usuario
 // b. Si el usuario no tiene id, esto significa que el usuario es nuevo y debería
 // hacerse una inserción
 // c. Si el usuario ya tiene id asignado debe realizarse un update
  public function ver(){
    var_dump($this);
  }

  public function guardar() {
    $usuarios = [];
    $usuariosJson = file_get_contents('usuarios.json');
    if(!empty(json_decode($usuariosJson))) {
      $usuarios = json_decode($usuariosJson);
    }

    foreach ($usuarios as $usuario) {
      if ($usuario->email == $this->email) {
        die(json_encode($usuario));
        echo "lo logre";
        break;
      }
    }

    // $usuarioAGuardar->setCelular($this->celular->jsonSerialize());
    $usuarioAGuardar = $this->jsonSerialize();

    $usuarios[] = $usuarioAGuardar;

    $usuariosJson = json_encode($usuarios);
    file_put_contents('usuarios.json', $usuariosJson);
  }


}
 ?>

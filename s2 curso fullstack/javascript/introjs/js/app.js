//algunas pruebas no incluidas en el practico

elBody = document.querySelector('body');
elH1 = document.querySelector('h1');

elH1.style.color = 'red';

elBody.setAttribute('class', 'mili');

elBoton = document.querySelector('button');

atributoBoton = elBoton.getAttribute('id');

console.log(atributoBoton);

console.log(elBoton);

//------------------------------

losP = document.querySelectorAll('p')

console.log(losP);

for (var i = 0; i < losP.length; i++) {
  losP[i].style.color = 'green';
}

unP = document.querySelector('p');

unP.removeAttribute('style');


// 3. Dentro del archivo app.js generar:




// a. una variable que contenga un string.
var string = "mili";

// b. una variable que contenga un array.
var array = ["mili", "jime", "nacho", "bruno", "male"];

// c. una variable que contenga un boolean
var boolean = false;

// Hacer un console.log() de cada una de las variables anteriormente
// creadas.
// 5. Abrir el archivo con el navegador y verificar que en la consola de las dev
// tools se impriman las variables correspondientes.

console.log(string);
console.log(array);
console.log(boolean);


// 6. Crear una variable que contenga un Array con los números impares desde
// el 1 hasta el 137. Para lo anterior, no se permite generar el Array
// manualmente, el mismo deberá generarse con sentencias de JS

var impares = [];

for (var i = 0; i < 138; i++) {
  if (i%2 != 0) {
    impares.push(i);
  }
}
console.log(impares);



// Objetos Literales
// 1. Dentro del archivo app.js del punto anterior, crear:
// a. un objeto literal ironMan con las siguientes propiedades/métodos:
// i. nombre (String) - "Iron Man"
// ii. equipo (String) - "Avengers"
// iii. poderes (Array) - ["Volar", "Lanzar misiles", "Disparar láser"]
// iv. energía (Number) - 100
// v. getPoder (Fn) - recibe un parámetro numérico. Retornará el
// poder seleccionado.

var ironMan = {
  nombre:"Iron Man",
  equipo: "Avengers",
  poderes: ["Volar", "Lanzar misiles", "Disparar láser"],
  energia: 100,
  getPoder: function(numero) {
    console.log(this.poderes[numero]);
    // elegido, se deberá descontar de la energía una cantidad así:
    // i. Para ironMan:
    // ● Volar, descontará 10 puntos de energía.
    // ● Lanzar misiles, descontará 15 puntos de energía.
    // ● Disparar láser, descontará 25 puntos de energía.
    switch (numero) {
      case 0:
        this.energia = this.energia - 10;
        break;
      case 1:
        this.energia = this.energia - 15;
        break;
      case 2:
        this.energia = this.energia - 25;
        break;
    }
  console.log(this.energia);
  }
};

console.log(ironMan.getPoder());
//
// b. un objeto literal Hulk con las siguientes propiedades/métodos:
// i. nombre (String) - "Hulk"
// ii. equipo (String) - "Avengers"
// iii. poderes (Array) - ["Aplastar", "Gritar", "Golpear"]
// iv. energia (Number) - 100
// v. getPoder (Fn) - recibe un parámetro numérico. Retornará el
// poder seleccionado.

var hulk = {
  nombre: "Hulk",
  equipo: "Avengers",
  poderes: ["Aplastar", "Gritar", "Golpear"],
  energia: 100,
  getPoder: function(numero) {
    console.log(this.poderes[numero]);
    // ii. Para hulk:
    // ● Aplastar, descontará 5 puntos de energía.
    // ● Gritar, descontará 25 puntos de energía.
    // ● Golpear, descontará 10 puntos de energía.

    switch (numero) {
      case 0:
        this.energia = this.energia - 5;
        break;
      case 1:
        this.energia = this.energia - 25;
        break;
      case 2:
        this.energia = this.energia - 10;
        break;
    }
    console.log(this.energia); // exclusivamente de control
  }
};

// Utilizando las funciones Math.random() y Math.floor(), generar un
// número entero al azar entre 0 y 2 (en relación a nuestro array de
// poderes) para luego poder ser utilizado como parámetro de la
// función getPoder()

var numero = Math.floor(Math.random() * 3); // math.floor de 0.5 da 0. de 1.5 da 1 y de 2.5 da 2. el 3 no esta incluido en la funcion. Por eso se multiplica por 3

console.log(numero);

// d. Dicho número deberá ser pasado al método getPoder() y mostrar
// en consola el poder elegido. Así mismo dependiendo del poder
// elegido, se deberá descontar de la energía

hulk.getPoder(numero); // lo paso con el nombre de la variable
hulk.getPoder(Math.floor(Math.random() * 3)); //lo paso directamente con el metodo
hulk.getPoder(Math.floor(Math.random() * 3));

ironMan.getPoder(Math.floor(Math.random() * 3));
ironMan.getPoder(numero); // lo paso con el nombre de la variable

// e. Después de descontada la energía de cada superhéroe, mostrar en
// consola la energía final con la que quedó cada uno.
console.log(hulk.energia);
console.log(ironMan.energia);

// 2. Dentro del archivo app.js crear un objeto literal misDatos. Tu información
// personal deberá ser parte de sus propiedades:
// a. nombre
// b. apellido
// c. dni
// d. comidaFavorita
// e. edad

misDatos = {
  nombre: "mili",
  apellido: "rey",
  dni: 30987213,
  comidaFavorita: "fideos rellenos",
  edad: 35,

  // 4. Implementar el método saludar() en el objeto misDatos, que al ser
  // invocado retorne un string así: "Hola mi nombre es NOMBRE APELLIDO y
  // tengo EDAD años". Imprimir su invocación en consola.

  saludar: function() {
    return "Hola mi nombre es " + this.nombre + " " + this.apellido + " y tengo " + this.edad + " años";
  }
};

// 3. Deberás recorrer el anterior objeto con un for in y mostrar por consola
// cada uno de las propiedades junto con sus valores.

for (var datos in misDatos) {
  console.log(datos + ": " + misDatos[datos]); {

  }
}

console.log(misDatos.saludar()); // Imprimir su invocación en consola.


// D.O.M
// El evento onclick() ocurre cuando un usuario clickea en el elemento
// seleccionado. Para probarlo brevemente vamos a crear en el index.html un
// <button> con id="miBoton".

// Luego de ello, en el archivo app.js vamos a
// capturarlo en una variable botonDePrueba,

var botonDePrueba = document.getElementById('miBoton');

//  luego, sobre esta variable implementar el siguiente código:

botonDePrueba.onclick = function(){alert("Testeando el click")}

// ¿Qué ocurre si al ver el archivo en el navegador hacemos click?

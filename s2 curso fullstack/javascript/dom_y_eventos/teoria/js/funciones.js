window.addEventListener("load", function()  {


  var nombre = prompt("decime tu nombre");

  var contNombre = document.createTextNode(nombre);

  console.log(contNombre);

  var elH1 = document.querySelector('h1');

  elH1.innerHTML = "Bienvenido " + (nombre);


  var elBody = document.querySelector('body')

  elBody.style.backgroundColor = 'pink';

  console.log('mili');

//ejemplo closure

function mili(parametro) {
  function ponerComillasAlParametro() {
    return "\"" + parametro + "\"";
  }
  return ponerComillasAlParametro();
}

console.log(mili('mili'));

// ejemplo de callback

// esta es la funcion que va a ser parametro
function ponerComillasAlParametro(parametro) {
  return "\"" + parametro + "\"";
}

//esta es la funcion con un callback
function cambiarParametro(string, funcion) {
  return funcion(string);
}

//le mando de parametro a ponerComillasAlParametro
console.log(cambiarParametro("mili", ponerComillasAlParametro));


let numeros= [1,2,3,4,5];

let string = "cleopatra";

for (numero of numeros) { //asi recorro un array
  console.log(numero);
}

for (letra of string) { //asi recorro las letras de un string
  console.log(letra);
}

// forEach solo sobre un array, y recibe una funcion anonima, con cada elemento del array como parametro

numeros.forEach(function(numero){
  console.log(numero*3);

});

// map crea una array  nueva

let nuevosNumeros = numeros.map(function(numero) { // le agrego un string a un numero
  return numero + "mili";
});

console.log(nuevosNumeros);

let otrosNumeros = nuevosNumeros.map(function(string){  //le agrego un numero a un string
  return string + 1;
});

console.log(otrosNumeros);

let masNumeros = numeros.map(function(numero){ // opero sobre un numero con map
  return numero + 1;
});

console.log(masNumeros);

// filter deja pasar las que cumplen alguna condicion. tambien las guarda en una nueva array
// Tambien usa un callback

let arrayConMayores = numeros.filter(function(numero) { // aca se ve usando el callback
  return numero > 2;
});


console.log (arrayConMayores);

// reduce convierte los elementos del array en un solo valor.
//Se le puede pasar el valor del acumulador despues del callback

let numerosSumados = numeros.reduce(function(numero, acumulador){
    return numero + acumulador;
}, 0);


console.log(numerosSumados);

// se pueden realizar otras operaciones en el callback

let numerosRestados = numeros.reduce(function(numero, acumulador){
  return acumulador - (numero + 5);
}, 5);

console.log(numerosRestados);

// join une todos los elementos del array de strings en un string.
// le podemos pasar un separador, si no, los une con comas sin espacios
// NO RECIBE UN CALLBACK

let array = ["mili", "angel", "perro", "gato"];

let arrayUnida = array.join("...."); //pasandole puntos

console.log( arrayUnida);

let otraUnida = array.join(); //pasandole nada, me va a retornar comas sin espacios

console.log(otraUnida);

let terceraUnida = array.join(""); // pasandole un espacio vacio, me las va a juntar

console.log(terceraUnida);

// find devuelve el valor del PRIMER elemento que cumple la funcion de prueba proporcionada.
// esa es la diferencia con filter, que devuelve un array con todos los elementos que cumplen la condicion

console.log(numeros);

let unNumeroAlto = numeros.find(function(numero){
  return numero > 2;
});


console.log(unNumeroAlto);

let unArrayPerro = array.find(function(palabra){
    return palabra.length > 4;
});

console.log(unArrayPerro);

});

// listado de funciones que reciben callback:

// foreach: array.foreach(function(elemento) {} );
//
// map
//
// let arrayMapeada = array.map(function(elemento){});
//
// filter
//
// let arrayFiltrada = array.filter(function(elemento){});
//
// reduce
//
// let arrayReducida = array.reduce(function(elemento, acumulador){},inicio);
//
// find
//
// let elPrimerEncontrado = array.find(function(elemento){});
//
// NO RECIBEN callback
//
// join() que queda asi:
//
// array.join("con que quiero separar los elementos");
//
// for of y for in

let arrayCualquiera = [];
for (let a = 0; a < 30; a++) {
  arrayCualquiera.push((a.toString()).repeat(5));
}

console.log(arrayCualquiera);

let nuevoArray = arrayCualquiera.map(function(unoDeLosElementos){
   
  // unoDeLosElementos = parseInt(unoDeLosElementos);// lo que quiera hacerle a ese elemento
  // unoDeLosElementos = "El vino " + unoDeLosElementos
  return "El precio de este vino es " + unoDeLosElementos; 

});

unLi = document.createElement('li')

let laLista = document.querySelector("ul");

for (const unLi of nuevoArray) {
  laLista.append(unLi);
}
console.log(laLista);

console.log(nuevoArray);


let nuevoArray = arrayCualquiera.map(function(unoDeLosElementos){
  return "El precio de este vino es " + unoDeLosElementos; 
});

let nuevoArray2 = arrayCualquiera.map()

// ARROW FUNCTIONS

// SI TIENEN UN SOLO ARGUMENTO, NO LLEVAN PARENTESIS!
// SI RETORNAN UNA SOLA EXPRESION, NO LLEVAN LLAVES!
// SE REEMPLAZA EL RETURN POR UNA FLECHA GORDA (FAT ARROW)!

let nuevoArray2 = arrayCualquiera.map(unoDeLosElementos => "esta es la array de la arrow " + unoDeLosElementos);

let otravariable = "3";

let nuevoArray3 = arrayCualquiera.map((unoDeLosElementos, otraVariable) => {
  if(unoDeLosElementos > 3000) {
    return unoDeLosElementos + " Esta re barato111"
  }
})

console.log(nuevoArray2)


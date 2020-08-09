window.addEventListener('load', function(){

alert("hola");

let elbody= document.querySelector('body');

elbody.style.backgroundColor=('pink');

  // D.O.M - 1
  // 1. Crear un archivo gastos.html y vincularlo con archivo gastos.js.
  // Importante, tener precaución de generar todo nuestro código JS dentro del
  // window.onload.

  // 2. Usando los métodos prompt(), confirm() y alert() e incluso cosas que
  // hemos visto en clases pasadas. Vamos a generar un reporte de gastos diarios
  // de una familia. Dicho reporte funciona de la siguiente manera: Pide la
  // cantidad de integrantes de la familia, para cada uno de ellos pide nombre y
  // luego la cifra que ésta persona gastó. Al final veremos cada nombre con su
  // correspondiente cifra, la persona que más gastó y la persona que menos
  // gastó. Y el total de gastos de toda la familia.

  // a. Lo primero que haremos es preguntarle al visitante recién ingresa al
  // HTML si quiere iniciar. Si la respuesta es negativa, deberá mostrarse
  // una alerta que diga "Gracias por haber venido" y luego será
  // direccionado al sitio web de Netflix.

  if(!confirm('quiere inciar')) {
    alert('gracias por haber venido');
    window.location.href = "http://www.netflix.com";
    } else {

  // b. Ahora, si la respuesta es positiva, vamos a iniciar nuestro proceso, lo
  // primero que haremos es pedirle al visitante la cantidad de integrantes
  // de la familia.

let numeroFamiliares = prompt('cuantos son');

// Validar que el dato ingresado sea un número y que no
// sea inferior a 3, de NO ser un número deberá alertar que el valor
// necesario es un número y volverá a preguntar por la cantidad de
// integrantes. Para este proceso, puede ser de utilidad la siguientes
// función nativa de JS isNaN(). Puedes buscar qué hace la misma.
  // http://localhost/s2%20curso%20fullstack/javascript/dom_y_eventos/practica/gastos.html

while (isNaN(numeroFamiliares) || numeroFamiliares < 3) {
  alert('numero incorrecto');
  numeroFamiliares = prompt('cuantos son');
}


let miembros = [];
let gastos = [];

// c. Una vez con la cantidad de integrantes listos, vamos a pedir para cada
// uno: nombre y gastos del día. Tener en cuenta de validar que:
// i. El nombre no puede estar vacío.
// ii. Los gastos no puede ser un texto ni estar vacío.
// En cualquiera de esos casos, alertar del error y volver a pedir el dato.

for (var i = 0; i < numeroFamiliares; i++) {
    miembros[i] = prompt('nombre');
    while (miembros[i].length == 0) {
      alert('ingrese nombre');
      miembros[i] = prompt('nombre');
    }

    gastos[i] = prompt('gastos');
    while (isNaN(gastos[i]) || gastos[i] == 0) {
      alert('gastos es numero');
      gastos[i] = prompt('gastos');
    }
}

console.log(miembros);
console.log(gastos);

// Al final se deberá generar un Array de Objetos Literales cada uno con
// la propiedad nombre y valor. Ejemplo:
// integrantes[
// {nombre: "Ada", gastos: 300},
// {nombre: "Tim", gastos: 570},
// {nombre: "Vincent", gastos: 80},
// ]

let familiares = [];

for (var i = 0; i < numeroFamiliares; i++) {
  familiares.push({
    nombre: miembros[i],
    gastos: gastos[i]
  });
}

console.log(familiares);
// 1. Generar un título con el texto "Reporte de gastos familiares"

var elHache3 = document.createElement("h3");

var elTituloReporte = document.createTextNode("Reporte de Gastos Familiares");

elHache3.append(elTituloReporte);

var elBody = document.querySelector('body');

elBody.append(elHache3);

var ulFamiliares = document.createElement('ul');
for (familiar of familiares) {
    var liFamiliar = document.createElement('li');
    liFamiliar.append("Su nombre es " + familiar.nombre + " y sus gastos son " + familiar.gastos);
    ulFamiliares.append(liFamiliar);
}


elbody.append(ulFamiliares);

// d. Después de esto haremos mostraremos en consola dicho array.

console.log(familiares);

// D.O.M - 2
// Seguidamente y teniendo en cuenta toda la funcionalidad existente, queremos
// mostrar los resultados dentro del contenido del archivo gastos.html . ATENCIÓN:
// todo lo siguiente deberá ser generado desde javascript, nuestro archivo html no
// debe tener NADA dentro del <body> excepto la vinculación del <script>.

console.log(familiares);
console.log(gastos);

// Generar una lista dentro de la cual se muestre:

laUl = document.createElement('ul');

// a. El nombre del integrante que más gastó junto con su gasto.

//1. buscar el gasto maximo del Array
//2. buscar en los objetos cual tiene de atributo gasto ese numero
//3. obtener ese nombre y guardarlo en una li




gastos = gastos.map(function(gasto){
    return parseInt(gasto);
  }
);

var maximo = Math.max.apply(null, gastos)
console.log(maximo)

function gastador() { // hecho unicamente con bucles
  for (familiar of familiares) {
    if (familiar.gastos == maximo) {
        return("El mas gastador se llama " + familiar.nombre + " y gasto " + familiar.gastos);
    }
  }
}

var gastadorFind2 = familiares.find(function(familiar) { //usando la funcion find
  return familiar.gastos == maximo;
});

// let gastadorFinal3 = familiares.find(familiar.gastos => minimo);

let gastadorFinal3 = familiares.find(familiar => familiar.gastos == maximo);

console.log(gastador());

console.log(gastadorFind2);

console.log(gastadorFinal3);

elGastador = document.createTextNode(gastador());

let liGastador = document.createElement('li');

liGastador.append(elGastador);

// b. El nombre del integrante que menos gastó junto con su gasto.

//1. buscar el gasto minimo del Array
//2. buscar en los objetos cual tiene de atributo gasto ese numero
//3. obtener ese nombre y guardarlo en una li

var minimo = Math.min.apply(null, gastos)
console.log(minimo)

function ahorrador() {
  for (familiar of familiares) {
    if (familiar.gastos == minimo) {
        return("El menos gastador se llama " + familiar.nombre + " y gasto " + familiar.gastos);
    }
  }
}

var ahorrador2 = familiares.find(function(familiar) { //usando la funcion find
  return familiar.gastos == minimo;
});

// let gastadorFinal3 = familiares.find(familiar.gastos => minimo);

let ahorrador3 = familiares.find(familiar => familiar.gastos == minimo);

console.log(ahorrador());

console.log(ahorrador2;

console.log(ahorrador3;

let elAhorrador = document.createTextNode(ahorrador());

let liAhorrador = document.createElement('li');

liAhorrador.append(elAhorrador);

//c. Los gastos de toda la familia.

console.log(gastos);

 let gastosDeTodaLaFamilia = gastos.reduce(function(gasto, acumulador){
  return acumulador + gasto;
}, 0);

console.log(gastosDeTodaLaFamilia);

let laLiGastos = document.createElement('li');
console.log(laLiGastos);

laLiGastos.append("Los gastos de toda la familia son " + gastosDeTodaLaFamilia);
let ulFamilia = document.createElement('ul')


// d. El promedio de gastos del día.

let promedioDia = document.createTextNode("El promedio de gasto de todos gastos de toda la familia son: " + gastosDeTodaLaFamilia /  numeroFamiliares)

let liPromedio = document.createElement('li');

liPromedio.append(promedioDia);

ulFamilia.append(liPromedio);
ulFamilia.append(laLiGastos);
ulFamilia.append(liGastador);
ulFamilia.append(liAhorrador);
elBody.append(ulFamilia);

// Todos los elementos de lista, deberán tener el atributo title con el mismo
// texto que muestra cada uno

liPromedio.setAttribute('title', 'promedioDia');






















} //fin else del confirm
});

window.addEventListener("load", function(){

  var elBody = document.querySelector('body')

  elBody.style.backgroundColor = 'pink';

  console.log('mili');

 //CREATE ELEMENT

// la function createElement nos permite crear elementos nuevosNumeros
//Primero capturo como siempre

let elUl = document.querySelector("ul");

//creo el elemento nuevo
let nuevoLi = document.createElement('li');

// si le voy a agregar texto lo hago con CREATETEXTNODE
let textoLi = document.createTextNode("Lorem Ipsum Dolor");

//le pongo el texto al elemento
nuevoLi.append(textoLi);

//le pongo el elemento al padre donde quiero que este
elUl.append(nuevoLi);

let elHacheDos = document.createElement('h2');

let elTextoH2 = document.createTextNode('Hola, me llamo Pepe y quiero programar');

elHacheDos.append(elTextoH2);

elBody.append(elHacheDos);

// REMOVE elemento

// ya tengo seleccionado elUl, voy a trabajar sobre el

var nodoLi = elUl.children; //convierto todos los hijos en un nodo

var nodoQueSeVa = nodoLi[1]; // capturo el elemento que quiero borrar

elUl.removeChild(nodoQueSeVa); // una vez hecho var, lo remuevo

// otro intento

let elDiv = document.querySelector('div');

let nodosDelDiv = elDiv.children;

let elQueQuieroSacar = nodosDelDiv[1];

elDiv.removeChild(elQueQuieroSacar);

//tercer intento

let cosasDelBody = elBody.children; // de nuevo, capturo el nodo de cosas donde voy a sacar algo

let bodyQueQuieroSacar = cosasDelBody[3]; //elijo el hijo de ese nodo

elBody.removeChild(bodyQueQuieroSacar); // del padre, lo remuevo (no del nodo)

console.log(bodyQueQuieroSacar);

// -------------------------------

//elBody.append(cosasDelBody[2]);



});

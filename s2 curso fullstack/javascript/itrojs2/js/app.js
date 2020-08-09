
// Dentro del archivo app.js generar:
// una variable que contenga un string.
// una variable que contenga un array.
// una variable que contenga un boolean.
// Hacer un console.log() de cada una de las variables anteriormente creadas.
// Abrir el archivo con el navegador y verificar que en la consola de las dev tools se impriman las variables correspondientes.
// Crear una variable que contenga un Array con los números impares desde el 1 hasta el 137. Para lo anterior, no se permite generar el Array manualmente, el mismo deberá generarse con sentencias de JS.

var elBody = document.querySelector('body');

elBody.style.backgroundColor = "olive";

var elP = document.querySelector('p');

elP.style.color = 'red';

otroP = document.querySelector('.pe')

otroP.style.fontWeight = "bold";

var ultimoP = document.getElementById('mili');

mili.style.textAlign = "justify";
mili.style.textDecoration = "underline";

losLi = document.querySelectorAll('li');

for (var i = 0; i < losLi.length; i++) {
  losLi[i].style.float = "left";
  losLi[i].style.width = "20%";
}


elA = document.querySelector("ul li a")
  elA.style.color = "pink";


elP = document.querySelector('p');
console.log(elP.getAttribute('style'));

elSegundoP = document.querySelector(".pe");
elSegundoP.setAttribute("style", "color:orange");

elA.removeAttribute('href');

elLink = document.querySelector('ul li a');
console.log(elLink.hasAttribute('style'));

// El evento onclick() ocurre cuando un usuario clickea en el elemento seleccionado. Para probarlo
// brevemente vamos a crear en el index.html un <button> con  id="miBoton". Luego de ello, en el
// archivo app.js vamos a capturarlo en una variable botonDePrueba, luego, sobre esta variable
//  implementar el siguiente código:

var botonDePrueba = document.querySelector('button');
var voluntad = prompt('el color');

if (voluntad == "color") {
  var elBody = document.querySelector('body');
  elBody.style.backgroundColor = "olive";
} else //if (voluntad == "white") {
  {elBody.style.backgroundColor = "white";
}


botonDePrueba.onclick = function(){
    alert("Testeando el click")
    var elBody = document.querySelector('body');
    elBody.style.backgroundColor = "pink";};

// ¿Qué ocurre si al ver el archivo en el navegador hacemos click?

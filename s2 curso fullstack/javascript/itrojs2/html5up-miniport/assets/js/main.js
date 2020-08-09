 window.onload();

// Utilizando document.getElementById(), ocultar el elemento <h1 id="titular"> al cargar la página.

var elTitular = document.getElementById("titular");

elTitular.style.display = "none";

// Utilizando querySelector() hacer que la imagen de la lechuza, una vez cargada la página, se
//convierta en blanco y negro, podemos utilizar: elemento.style.filter = "grayscale(100%)";

var lechuza = document.querySelector('img');
lechuza.style.filter = 'grayscale(100%)';

// Seleccionar el elemento con id "copyright" y mostrar en consola a dicho elemento.

console.log(document.getElementById('copyright'));

// Utilizando elemento.style, cambiarle el color actual por un rojo al <h2>.

var elH2 = document.querySelector('h2');
elH2.style.color = 'red';

// Nos piden cambiar el color a todos los íconos de la página. Recordá que estos tiene la clase “icon”.

var losIconos = document.querySelectorAll('.icon');

for (var i = 0; i < losIconos.length; i++) {
  losIconos[i].style.color = 'pink';
}

// Seleccionar el elemento con id “copyright” y mostrar en consola todos sus atributos,
//utilizando el método .attributes

var copy = document.getElementById('copyright');
console.log(copy)
console.log(copy.attributes);


// Mostrar en consola la url a donde dirigen los botones de twitter y facebook utilizando getAttribute.

var social1 = document.querySelector('.fa-facebook');
var social2 = document.querySelector('.fa-twitter');

var linkSocial = social1.getAttribute('href');
var linkSocial2 = social2.getAttribute('href');

console.log(linkSocial + " " + linkSocial2);

// Nos reportaron que el enlace de youtube se dirige a google, y nos piden cambiar esto con Javascript
//utilizando setAttribute. Hacer que de ahora en más dicho enlace llever al canal de youtube de Digital House.

var linkDH = document.querySelector('.fa-youtube')

linkDH.setAttribute('href', 'https://www.youtube.com/channel/UCKkPOtW8gQPgIUaxF4Og7PA');

// Nos informaron que el form no estaría funcionando, nos comentaron si por Javascript podíamos
//consultar si tenía el atributo action. Hacer esto y mostrar el resultado de dicha consulta en consola.

var elForm = document.querySelector('form');
console.log(elForm.hasAttribute('action'));

// Nos comentan que el programador se confundió y en vez de agregar el atributo action,
// agregó un atributo erroneo (url), nos piden borrarlo y agregar la url en el atributo action,
// todo con Javascript.

elForm.removeAttribute('url');
elForm.setAttribute('action', 'index.html');

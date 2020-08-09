
window.onload = function() { //me aseguro de que cargue aun cuando el script esta al final de la pagina

//1. Utilizando document.getElementById(), ocultar el elemento <h1 id="titular">
// al cargar la página.

var elH1 = document.getElementById("titular");

elH1.style.display = ('none');

// 2. Utilizando querySelector() hacer que la imagen de la lechuza, una vez
// cargada la página, se convierta en blanco y negro, podemos utilizar:
// elemento.style.filter = "grayscale(100%)";

var lechuza = document.querySelector('img');

lechuza.style.filter = "grayScale(100%)";

// 3. Seleccionar el elemento con id "copyright" y mostrar en consola a dicho
// elemento.

var copy = document.getElementById('copyright');

console.log(copy);

// 4. Utilizando elemento.style, cambiarle el color actual por un rojo al <h2>.

elHacheDos = document.querySelector('h2');

elHacheDos.style.color = "red";

// 5. Nos piden cambiar el color a todos los íconos de la página. Recordá que
// estos tiene la clase “icon”.

losIconos = document.querySelectorAll('.icon'); // los selecciono por clase

for (var i = 0; i < losIconos.length; i++) { // los recorro
  losIconos[i].style.color = 'olive';
}

// 6. Seleccionar el elemento con id “copyright” y mostrar en consola todos sus
// atributos, utilizando el método .attributes

console.log(copy.attributes); // esto esta bien????

// 7. Mostrar en consola la url a donde dirigen los botones de twitter y
// facebook utilizando getAttribute.

losLiA = document.querySelector('li a.fa-facebook');

losLiB = document.querySelector('li a.fa-twitter');

console.log(losLiA);

aDonde1 = losLiA.getAttribute('href');
aDonde2 = losLiB.getAttribute('href');

console.log(aDonde1);
console.log(aDonde2);

// 8. Nos reportaron que el enlace de youtube se dirige a google, y nos piden
// cambiar esto con Javascript utilizando setAttribute. Hacer que de ahora en
// más dicho enlace llever al canal de youtube de Digital House.

linkYoutube = document.querySelector('.fa-youtube');

linkYoutube.setAttribute('href', 'https://www.youtube.com/channel/UCKkPOtW8gQPgIUaxF4Og7PA');

// 9. Nos informaron que el form no estaría funcionando, nos comentaron si por
// Javascript podíamos consultar si tenía el atributo action. Hacer esto y
// mostrar el resultado de dicha consulta en consola.

elForm = document.querySelector('form');

console.log(elForm.hasAttribute('action'));

// 10. Nos comentan que el programador se confundió y en vez de agregar el
// atributo action, agregó un atributo erroneo (url), nos piden borrarlo y
// agregar la url en el atributo action, todo con Javascript. -->

elForm.removeAttribute('url');

elForm.setAttribute('action', 'http://www.digitalhouse.com');

console.log(elForm);

}

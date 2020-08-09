window.addEventListener('load', function(){
  //
  // Crear un archivo HTML y vincular el mismo con un archivo app.js, dentro del mismo
  // crear:
  // 1. un objeto literal estudiante con las siguientes propiedades y sus valores:
  // a. nombre (String)
  // b. curso (String)
  // c. dni (Number)
  // d. email (String)

let estudiante = {
  nombre:"mili",
  curso: 'DHFS',
  dni: 4444444, //no quiero develar mi edad aunque ya la saben jeje
  email: 'mili@mili.com'
}
  // e. Crear una función fromObjectToArray que reciba un parámetro, será
  // un objeto literal, y que retorne los valores de cada una de las
  // propiedades de ese objeto en un Array.


function fromObjectToArray(objeto) {
  let arrayObjeto = [];
  for (var propiedad in objeto) {
    console.log(propiedad); // linea puesta exclusivamente para control
    arrayObjeto.push(objeto[propiedad]);
  }
  return(arrayObjeto);
}
  // f. Mostrar en consola el Array que retorna esa función.
console.log(fromObjectToArray(estudiante));

// 2. Crear una función cambiarColorDeFondoDelBody. Que reciba como
// parámetro un String (nombre del color ó valor hexadecimal) y que cambie el
// color de fondo de la etiqueta <body>. El cambio sólo deberá realizarse, si el
// valor pasado como parámetro es diferente a green ó #0f0 ó #00ff00. Si el
// cambio de color es posible, la función retornará true. De lo contrario
// retornará false.

function cambiarColorDeFondoDelBody() {
  var nombreColor = prompt('color');
  if (nombreColor != "green" && nombreColor != "#0f0" && nombreColor != "#00ff00") {
    let elBody = document.querySelector('body');
    elBody.style.backgroundColor=nombreColor;
    return true;
  } else {
    return false;
  }
}

// a. Ejecutar la función y pasarle como parámetros diferentes valores.
// b. Mostrar en consola si el cambio de color fue posible.
cambiarColorDeFondoDelBody();

// 3. Dentro del documento HTML, crear al menos 10 párrafos (<p>) con texto
// aleatorio.

// a. Dentro de app.js capturar todos los párrafos del documento.

var losPe = document.querySelectorAll('p');
// b. Hacer una función que, tomando como parámetro a los párrafos
// capturados previamente. Recorra los mismos y:

console.log(losPe);

  function tarea(elemento) {
// i. Les cambie el color de tipografía a rojo.
// c. El proceso anterior deberá ejecutarse SOLAMENTE para los párrafos
// con número par.
    let pesqueno = 0;
    for (var i = 0; i < elemento.length; i++) {
      let elp = elemento[i];
      console.log(elp); //otra linea exclusivamente de control
      if (i%2 == 0) {
        elp.style.color = 'red';
  // ii. Genere que la tipografía esté en negrita.
        elp.style.fontWeight = "bold";
  // iii. Defina que el texto esté con alineación al centro.
        elp.style.textAlign = 'center';
      } else {
        pesqueno = pesqueno + 1;
      }
    }
  return(pesqueno);
// d. La función deberá retornar la cantidad de elementos <p> que no
// fueron afectados con estos cambios de estilo.
  }
// e. Mostrar en consola: Párrafos que no se vieron afectados: N.

console.log(tarea(losPe)); // llamo a la funcion para probar


// 1. Vamos a jugar al detective. Hemos recibido un código anónimo cuyo mensaje
// queremos descifrar. las únicas pistas que tenemos para tal fin son: filter()
// y typeof. El código es:


var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6,
"r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3, "r",
2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 4, "a", 5,
2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 1, 5, 3, 2, "l",
3, "a", 4, "v", 5, "e", 6];

// a. Con toda esta información nos piden encontrar la altura de una calle.
// Para descifrar la misma nos dieron la siguiente pista: "Si descifrar la
// altura quieres, sumar todos los números debes". ¿Qué método de
// Array podemos usar para ésto?.

let calle = enigma.filter(function(elemento) { // aca se ve usando el callback
  return !isNaN(elemento);
});
console.log(calle);

let numeracion = calle.reduce(function(numero, acumulador){
  return acumulador + numero;
});

console.log(numeracion);

// b. Cómo último paso, nos piden encontrar el nombre de la calle. Para ello
// tenemos la siguiente pista: "Si el nombre de la calle necesitás, omitir
// todos los números deberás".

let nombreCalle = enigma.filter(function(elemento) { // aca se ve usando el callback
  return isNaN(elemento);
});

nombreCalle = nombreCalle.join("");

// c. Finalmente debemos mostrar en consola el nombre de la calle junto
// con su altura

console.log(nombreCalle + " " + numeracion);


});

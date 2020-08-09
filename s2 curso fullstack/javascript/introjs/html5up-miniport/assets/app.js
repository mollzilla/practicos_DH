/* Crear un objeto literal estudiante con las siguientes propiedades y sus valores:
a. nombre (String)
b. curso (String)
c. dni (Number)
d. email (String)
e. Crear una función fromObjectToArray que reciba un parámetro, será
un objeto literal, y que retorne los valores de cada una de las
propiedades de ese objeto en un Array.
f.  Mostrar en consola el Array que retorna esa función. */

var estudiante = {
  nombre: "mili",
  curso: "DH FS",
  dni: 30987213,
  email: "mili@mili.com",
}

function fromObjectToArray(objeto) {
  var nuevoArray = [];
  for (var valor in objeto) {
    nuevoArray.push(objeto[valor]);
  }
  return nuevoArray;
}

console.log(fromObjectToArray(estudiante));


/* Crear una función cambiarColorDeFondoDelBody. Que reciba como
parámetro un String (nombre del color ó valor hexadecimal) y que cambie el
color de fondo de la etiqueta <body>. El cambio sólo deberá realizarse, si el
valor pasado como parámetro es diferente a green ó #0f0 ó #00ff00. Si el
cambio de color es posible, la función retornará true. De lo contrario
retornará false.
a. Ejecutar la función y pasarle como parámetros diferentes valores.
b. Mostrar en consola si el cambio de color fue posible. */

var color = prompt("color");

function cambiarColorDeFondoDelBody(color) {
  if (color != 'green' || color != "#0F0" || color != "#00FF00") {
    var body = document.querySelector('body');
    body.style.backgroundColor = color;
    return false;
  } else {
    return true;
  }
}

console.log(cambiarColorDeFondoDelBody(color));

/* Dentro del documento HTML, crear al menos 10 párrafos (<p>) con texto
aleatorio.
a. Dentro de app.js capturar todos los párrafos del documento. */

var losPe = document.querySelectorAll('p');
console.log(losPe);
/*
b. Hacer una función que, tomando como parámetro a los párrafos
capturados previamente. Recorra los mismos y:
i. Les cambie el color de tipografía a rojo. */

function parrafos(nodoDeParrafos) {
  var contador = 0;
  for (var i=0; i<10; i++) {
      console.log(nodoDeParrafos[i]);
    if (i%2 == 0) {
      nodoDeParrafos[i].style.color = 'red';
      nodoDeParrafos[i].style.textAlign = 'center';
      nodoDeParrafos[i].style.fontWeight = 'bold';
    } else if (i%2 != 0) {
      contador = contador + 1;
    }

    /* ii. Genere que la tipografía esté en negrita.
    iii. Defina que el texto esté con alineación al centro.
    c. El proceso anterior deberá ejecutarse SOLAMENTE para los párrafos
    con número par.
    d. La función deberá retornar la cantidad de elementos <p> que no
    fueron afectados con estos cambios de estilo.
    e. Mostrar en consola: Párrafos que no se vieron afectados: N.
    */
    i++;
  }
  return(contador);
}

console.log(parrafos(losPe));


/*
Dentro del archivo app.js:
1. Vamos a jugar al detective. Hemos recibido un código anónimo cuyo mensaje
queremos descifrar. las únicas pistas que tenemos para tal fin son: filter()
y typeof. El código es:

a. Con toda esta información nos piden encontrar la altura de una calle.
Para descifrar la misma nos dieron la siguiente pista: "Si descifrar la
altura quieres, sumar todos los números debes". ¿Qué método de
Array podemos usar para ésto?.

*/

var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6,
"r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3, "r",
2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 4, "a", 5,
2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 1, 5, 3, 2, "l",
3, "a", 4, "v", 5, "e", 6];

function descifrar() {
nuevoArray = [];
for (dato of enigma) {
  if (typeof dato === 'number') {
    nuevoArray.push(dato);
  }
}
var suma = nuevoArray.reduce(function(acumulador, elementoActual) {
  return acumulador + elementoActual;
});

return suma;
}

console.log(descifrar(enigma));

/* es 215 */

/*
b. Cómo último paso, nos piden encontrar el nombre de la calle. Para ello
tenemos la siguiente pista: "Si el nombre de la calle necesitás, omitir
todos los números deberás".
c. Finalmente debemos mostrar en consola el nombre de la calle junto
con su altura.
*/

function nombreCalle(enigma) {
  nuevoArray = [];
  for (dato of enigma) {
    if (typeof dato !== 'number') {
      nuevoArray.push(dato);
    }
  }
  return nuevoArray.join("");
}

console.log(nombreCalle(enigma) + " " + descifrar(enigma));

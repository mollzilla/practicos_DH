/* escribi una funcion escalera que tome
una altura (un numero) y devuelva un array que represente
a la escalera correspondiente

ej var escalera4= [
  "   #",
  "  ##",
  " ###",
  "####"
]

puedo usar la funcion repeat

var escalon="#".repeat(2);
*/

function escalera(altura) {   //declaro la funcion
  var escaleraAltura = [];    //declaro la variable que va a tener el array por fuera del for
  //var escalon = '#';          //declaro la variable por fuera a su vez pero creo que no es necesario
  for (var i=1; i<=altura; i++) {   //se itera tantas veces como altura tenga la escalera. empiezo en 1 para que no haya un escalon vacio
    escalon=" ".repeat(altura-i) + "#".repeat(i); //le doy al escalon el valor que tiene que tener, a uno sumandole y al otro restandole i, siempre me va a dar altura
    escaleraAltura.push(escalon); //agrego escalon a la ultima posicion del array, no me importa pisarla entonces
  }
  return escaleraAltura;        //retorno el valor
}

console.log(escalera(8));

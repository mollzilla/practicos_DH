/* ingresos de los estudiantes como un array de tiempos de llegada tarde, en minutos.

con esa informacion y la cantidad de estudiantes minima para abrir el curso, la profesora quiere saber si la clase se abre.

ej seAbre(ingresosDelLunes,2)

2 funciones:

seAbre, que dice si se hace una clase con el array de ingresos

aperturas, que toma un array con los arrays de ingresos de

varios dias, y la cantidad minima de estudiantes, y diga
 que dias se   abrio y que no,
 devolviendolo en booleanos*/


function seAbre(ingresos, cantMinima) { //declaro la funcion con los 2 parametros
    abre=false;                         //como voy a retornar un booleano es mas facil declararlo como falso
    alumnosPuntuales=0;                 //voy a contar los alumnos puntuales asi que los declaro x fuera del for
    for (var i=0; i<ingresos.length; i++) {   //el contador recorre el array de ingresos desde la posicion 0 uno x uno
         if (ingresos[i] < 1) {               //si el tiempo de demora es menor a uno, o sea puntual o antes de hora...
           alumnosPuntuales=alumnosPuntuales+1;   //hay un alumno puntual mas en el aula
         }
    }
    if (alumnosPuntuales >= cantMinima) { //si la cantidad de alumnos puntuales es mayor al argumento cantidad minima o igual
      abre=true;                          //cambio el valor de abre a verdadero
    }
    return abre;                          //retorno el booleano.
}
function seAbre(arIngresos,cantidadMinima){
  var alumnosPuntuales = 0;
  for (var i = 0; i <arIngresos.length; i ++){
    if (arIngresos[i] <= 0){
      alumnosPuntuales = alumnosPuntuales + 1;
    }return alumnosPuntuales >= cantidadMinima;
  }
}





console.log(seAbre([1,2,-1,0,0], 2));
console.log(seAbre([1,2,-1,0,0], 3));
console.log(seAbre([1,2,-1,0,0], 4));

function aperturas(arrayDeArrays, cantidad) {   //recibo un array de arrays de cada dia con alumnos
   arrayDeAperturas=[]                          //declaro por fuera del for el array que tengo que retornar
  for(var i=0; i<arrayDeArrays.length; i++) {   //recorro el array de arrays uno x uno, sabiendo q cada uno va a ser un array
    arrayDeAperturas.push(seAbre(arrayDeArrays[i], cantidad));  //cada uno de esos arrays lo tomo como argumento de seabre con la cant
  }                                                             // recibida de argumento, me va a tirar un booleano que es lo q pido
  return arrayDeAperturas;                                    //retorno el array que me va a quedar lleno de booleanos.
}

console.log(aperturas([[1,2,-1,0,0], [3,5,8,13,21,0]], 4));

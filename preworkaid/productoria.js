//la funcion productoria recibe un array de numeros
//y devuelve la productoria, el resultado de multiplicar sus elementos entre ellos


function productoria(unArray) {                     //declaro la funcion
var resultadoProductoria = 1;                       //le asigno el valor de 1 porque lo voy a multiplicar
    for (var i=0; i< unArray.length; i++) {         // repito la operacion tantas veces como posiciones del array
      resultadoProductoria = resultadoProductoria * unArray[i]; //multiplico 1 por cada posicion del array
    }
    return resultadoProductoria;                     // no olvidar retornar el producto
}

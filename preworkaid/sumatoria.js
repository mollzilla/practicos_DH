function sumaDeLosParesDel0Al(x) {
  var sumatoria=0;          //declaro la variable vacia
  for (var i=0; i<=x; i= i+2) { //voy a iterar i desde 0 hasta el numero de la variable y voy a iterar de a 2 desde el 0
    sumatoria=sumatoria+i;      //le sumo i sabiendo que solo le voy a sumar los pares
  }

  return(sumatoria);            //retorno el resultado
}

console.log(sumaDeLosParesDel0Al(8));

function masMenos(unArray) { //recibo un array de argumento
  var otroArray=[];         //tengo que devolver otro array lo declaro fuera del for
  var positivos=0;          //declaro una variable para cada valor q luego voy a dividir por el array
  var negativos=0;
  var ceros=0;

  for (var i = 0; i < unArray.length; i++) {  //itero tantas veces como elementos tenga el array para recorrerlo
    if (unArray[i] > 0) {                     //si es positivo...
      positivos=positivos+1;                  // le agrego uno a los positivos
    } else if (unArray[i] < 0) {              // si es negativo....
      negativos=negativos+1;                  //etc
    } else if (unArray[i] ===0 ) {ceros=ceros+1;}
  }

  otroArray.push(positivos/unArray.length);   //agrego al primer orden del otro array los positivos
  otroArray.push(negativos/unArray.length);   //dividido el total, que me va a dar el proporcional
  otroArray.push(ceros/unArray.length);       //tengo que recordar hacerlo en el orden correcto

  return otroArray;

}

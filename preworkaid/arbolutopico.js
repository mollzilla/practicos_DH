//el arbol utopico crece +1 el verano y se duplica en primavera
//cuanto crece al final de n ciclos

function arbolUtopico(ciclos) {
  var altura=1;                         //declaro la altura inicial del arbol
  for (var i = 0; i < ciclos; i++) {    //por cada uno de los ciclos
    if (i%2==0) {                       //en uno de ellos, x ej en los pares
      altura=*2;                        // duplico su altura
    } else { altura++;                  //si no, le sumo uno
      }
    }
    return altura;                      //al final no olvidar retornarlo
  }

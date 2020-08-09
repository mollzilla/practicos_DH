// Un evento al modificar el campo de nombre que dispare una alerta que diga "Gracias por dejar tu nombre"
var elNombre = document.getElementById('nombre');
console.log(elNombre);

// elNombre.addEventListener('change', function(){
//   alert('gracias por dejar su nombre');
// });

elNombre.onchange = function(){
  alert('Gracias por dejar tu nombre');
}

// Un evento al modificar el campo de email que dispare una alerta que diga "Gracias por dejar tu email"
var elMail = document.getElementById('email');

// elMail.addEventListener('change', function(){
//   alert('gracias por dejar tu email');
// });

elMail.onchange = function(){
  alert('Gracias por dejar tu email');
}

// No olvides que para definir eventos utilizamos addEventListener en estos ejercicios


// ¡Vamos con uno más!
//
// En este caso te pedimos que atrapes el evento cuando se envia el formulario y dispares una alerta que diga "Gracias!"
//
// No olvides escribir el evento mediante la función addEventListener

var enviar = document.querySelector('form');

console.log(enviar);

enviar.addEventListener('submit', function(event){
  alert('gracias!');
}
);

// version IDE

fetch("https://pokeapi.co/api/v2/type/")
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      var elUl = document.querySelector("ul");
       for (var pokemon of data.results ) {
          console.log(pokemon);
          var elLi = document.createElement('li');
          var elPoke = document.createTextNode(pokemon.name);
          elLi.append(elPoke);
          elUl.append(elLi);
       }
      })

// version MUMUKI

      fetch("https://pokeapi.co/api/v2/type/")
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          var elUl = document.querySelector("ul");
           for (var pokemon of data.results ) {
              var elLi = document.createElement('li');
              elLi.innerHTML = elLi.innerHTML +  pokemon.name;
       elUl.appendChild(elLi);
           }
          });



// ejercicio 4

// version IDE

fetch("https://pokeapi.co/api/v2/type/")
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      var elUl = document.querySelector("ul");
       for (var pokemon of data.results ) {
          console.log(pokemon);
          var elLi = document.createElement('li');
          var elPoke = document.createTextNode(pokemon.name);
          elLi.append(elPoke);
          elUl.append(elLi);
       }
      })

// version MUMUKI

      fetch("https://pokeapi.co/api/v2/type/")
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          var elUl = document.querySelector("ul");
           for (var pokemon of data.results ) {
              var elLi = document.createElement('li');
              elLi.innerHTML = elLi.innerHTML +  pokemon.name;
              elLi.setAttribute('url', pokemon.url)
       elUl.appendChild(elLi);
           }
          });


// ejercicio 5 version



fetch("https://pokeapi.co/api/v2/type/")
.then(function(response) {
  return response.json();
})
.then(function(data) {
  var elUl = document.querySelector("ul");
   for (var pokemon of data.results ) {
      var elLi = document.createElement('li');
      elLi.innerHTML = elLi.innerHTML +  pokemon.name;
      elLi.setAttribute('url', pokemon.url)
      elUl.appendChild(elLi);
      }

    var losLi = document.querySelectorAll('li');
    var elPe = document.querySelector('p');
    for (var i = 0; i < losLi.length; i++) {
      losLi[i].addEventListener('click', function() {
        elPe.innerHTML = 'click!';
      });
    }
   });

// Ejercicio 6:


   fetch("https://pokeapi.co/api/v2/type/")
   .then(function(response) {
     return response.json();
   })
   .then(function(data) {
     var elUl = document.querySelector("ul");
      for (var pokemon of data.results ) {
         var elLi = document.createElement('li');
         elLi.innerHTML = elLi.innerHTML +  pokemon.name;
         elLi.setAttribute('url', pokemon.url)
         elUl.appendChild(elLi);
         }

       var losLi = document.querySelectorAll('li');
       var elPe = document.querySelector('p');
       for (var i = 0; i < losLi.length; i++) {
         losLi[i].addEventListener('click', function() {
           elPe.innerHTML = this.innerHTML+ ": " + this.getAttribute("url");
         });
       }
      });


// Ejercicio 7

// Traemos todos los tipos. Tenemos eventos en cada <li>. Sabemos como obtener la URL de referencia al clickear en el <li>. Inclusive, simplificamos un poco el código para que podamos partir de un estado un poco más fresco.
//
// Agregamos además en el HTML un <ul class="ataques"> que quisieramos que se rellene con los ataques del tipo elegido.
//
fetch("https://pokeapi.co/api/v2/type/")
.then(function(response) {
  return response.json();
})
.then(function(data) {
  var elUl = document.querySelector("ul");
   for (var pokemon of data.results ) {
      var elLi = document.createElement('li');
      elLi.innerHTML = elLi.innerHTML +  pokemon.name;
      elLi.setAttribute('url', pokemon.url)
      elUl.appendChild(elLi);
      }

    var losLi = document.querySelectorAll('li');
    var elPe = document.querySelector('p');
    for (var i = 0; i < losLi.length; i++) {
      losLi[i].addEventListener('click', function() {
// Tu desafío entonces es agregar en el evento definido para el <li> la siguiente lógica:
        elPe.innerHTML = this.innerHTML+ ": " + this.getAttribute("url");
// Limpiar todo el contenido del <ul class="ataques">
        var ataques = document.querySelector('.ataques');
        // Hacer un pedido por AJAX a la URL del tipo elegido
      fetch(this.getAttribute('url'))
        .then(function(response) {
          return response.json();
          })
        .then(function(data){
// El JSON que retornará el pedido tiene un atributo llamado "moves" que contiene un array con todos los ataques
        console.log(data.moves);
// Una vez obtenido el array de ataques, por cada uno deberías agregar un <li> en el <ul class="ataques"> diga en el contenido el nombre del ataque. Cada uno de los ataques tiene un atributo "name" con el texto necesitas
        for (var ataque of data.moves) {
            console.log(ataque.name);
// Una vez obtenido el array de ataques, por cada uno deberías agregar un <li> en el <ul class="ataqque diga en el contenido el nombre del ataque. Cada uno de los ataques tiene un atributo "name" con el que necesitas
           var liMoves = document.createElement('li');
            liMoves.innerHTML = liMoves.innerHTML + ataque.name;
            console.log(liMoves)
            ataques.appendChild(liMoves);
        }
          })
      });
    }
   });

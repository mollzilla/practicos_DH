window.addEventListener("load", function()  {

var elH1 = document.querySelector('h1'); //capturo el elemento

elH1.classList.remove('mili'); //con classlist.remove() remuevo la clase

console.log(elH1);

li = document.querySelector('li');

li.classList.remove("mili2");
console.log(li);

li.classList.add("mili4"); // con classlist.add() agrego la clase

console.log(li);

console.log(li.classList.contains("mili5")); //classlist.contains() me devuelve un booleano segun exista

console.log(li.classList.contains("mili3"));


});

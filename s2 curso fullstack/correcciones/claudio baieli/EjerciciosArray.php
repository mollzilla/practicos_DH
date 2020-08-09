<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba de PHP</title>
</head>
<body>

<?php 

/**********************************************  ARRAYS **************************************/
echo "EJERCICIO ARREGLO";
echo "<br>";
echo "<hr>";
$persona = [
"nombre"   => "Jon",
"Apellido" => "Snow",
"Edad"     => 27,
"Hobbies"  => ["Netflix","Fútbol","Programar"]];

var_dump($persona);

echo "<br>";
echo "<br>";

echo "MODIFICACION DE ARRAY";   
echo "<br>";
echo "<hr>";

$persona["Edad"] = 25;
var_dump($persona);
echo "<br>";
echo "<br>";

$persona["Direccion"] = "Winterfell";
$persona["Hobbies"][3] = "Ping Pong"; 
var_dump($persona);
echo "<br>";
echo "<br>";

/**********************************************  EJERCICIO 1 **************************************/
echo "EJERCICIO 1";
echo "<br>";
echo "<hr>";
$numero1 = 1099;
$numero2 = 87;

echo "Numero 1: ----->" . $numero1;
echo "<br>";
echo "Numero 2: ----->" . $numero2;
echo "<br>";

if ($numero1 > $numero2){
	echo "El número mayor es $numero1";
} else {
	echo "El número mayor es $numero2";
}
echo "<br>";
echo "<hr>";

/**********************************************  EJERCICIO 2 **************************************/
echo "EJERCICIO 2";
echo "<br>";
echo "<hr>";
$numero = rand(1,5);
if ($numero == 3 or $numero == 5){
	echo "El numero aleatorio es: ----->" . $numero;	
} 
echo "<br>";
echo "<hr>";

/**********************************************  EJERCICIO 3 **************************************/
echo "EJERCICIO 3";
echo "<br>";
echo "<hr>";
if ($numero != 3){
	echo "El numero no es 3";	
} else {
	echo "El numero es 3";	
}
echo "<br>";
echo "<hr>";

/**********************************************  EJERCICIO 4 **************************************/
echo "EJERCICIO 4";
echo "<br>";
echo "<hr>";
$numero = rand(1,100);
echo "El numero aleatorio es:" . $numero;	
echo "<br>";
if ($numero > 50){
	echo "El numero es mayor que 50";	
} else if ($numero < 50){
	echo "El numero es menor que 50";	
}
echo "<br>";
echo "<hr>";

/**********************************************  EJERCICIO 5 **************************************/
echo "EJERCICIO 5";
echo "<br>";
echo "<hr>";
$nombredeusuario = "admin";
$contraseniadeusuario = "";

if ($nombredeusuario == "admin" and $contraseniadeusuario == "1234"){
	echo "Bienvenido !!!";	
} else {
	if ($nombredeusuario == "" || $contraseniadeusuario == "") {
		echo "Alguno de los campos esta vacio, verifique...";
	} else {
        if ($nombredeusuario != "admin"){
        	echo "Nombre de usuario incorrecto";
        } else if ($contraseniadeusuario != "1234"){
        	echo "Contraseña incorrecta";
        }
	}
}
echo "<br>";
echo "<hr>";

/***********************************************   EJERCICIO 6 **************************************/
echo "EJERCICIO 6";
echo "<br>";
echo "<hr>";
$edad = 40;
$casado = true;
$sexo = "Masculino";

if (($edad > 18 && $casado != true) or $sexo == "Otro"){
	echo "Bienvenido";
}
echo "<br>";
echo "<hr>";


/***********************************************   EJERCICIO 7 **************************************
*** para nro = 0 imprime "false"
*** para nro distinto de 0 imprime "true" */
echo "EJERCICIO 7";
echo "<br>";
echo "<hr>";

$cantidaddealumnos = 100;
if ($cantidaddealumnos) {
	echo "true";
} else
{
	echo "false";
}


echo "<br>";
echo "<hr>";

/***********************************************   EJERCICIO 8 ************************************/
echo "EJERCICIO 8";
echo "<br>";
echo "<hr>";

$numero = rand(1,2);
echo ($numero %2 == 0) ? "Numero par" : "Numero impar";

echo "<br>";
echo "<hr>";

/***********************************************   EJERCICIO 9 ************************************/
echo "EJERCICIO 9";
echo "<br>";
echo "<hr>";
$nota = 8;
switch ($nota) {
	case '0':
		echo "Desaprobado";		
		break;
	case '1':
		echo "Desaprobado";		
		break;
	case '2':
		echo "Desaprobado";		
		break;
	case '3':
		echo "Desaprobado";		
		break;
	case '4':
		echo "Zafamos";		
		break;
	case '5':
		echo "Zafamos";		
		break;
	case '6':
		echo "Bien";		
		break;
	case '7':
		echo "Bien";		
		break;
	case '8':
		echo "Bien!!!";		
		break;
	case '9':
		echo "MUY bien!!";		
		break;
	case '10':
		echo "Excelente!!!!!";		
		break;
	
	default:
		echo "Nota no valida";
		break;
}
echo "<br>";
echo "<hr>";

/***********************************************   EJERCICIO 10 ************************************/
echo "EJERCICIO 10";
echo "<br>";
echo "<hr>";

$nota = 22;
switch ($nota) {
	case '1':
		echo "Desaprobado";		
		break;
	case '2':
		echo "Desaprobado";		
		break;
	case '3':
		echo "Desaprobado";		
		break;
	case '4':
		echo "Zafamos";		
		break;
	case '5':
		echo "Zafamos";		
		break;
	case '6':
		echo "Bien";		
		break;
	case '7':
		echo "Bien";		
		break;
	case '8':
		echo "Bien!!!";		
		break;
	case '9':
		echo "MUY bien!!";		
		break;
	case '10':
		echo "Excelente!!!!!";		
		break;
	
	default:
		echo "El número no es válido";
		break;
}
echo "<br>";
echo "<hr>";

for ($i = 2; $i <= 20;$i+=2){
	echo $i;
	echo "<br>";
}

echo "<br>";
echo "<hr>";

$a = [];
$a[] = 87;
$a[] = 85;
var_dump($a);


?>	
</body>
</html>
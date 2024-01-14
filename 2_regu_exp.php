<?php
/*
*********************REGEX en PHP****************************

Funciones
_________________________________________________________
preg_match() 	Returns 1 si encuentra el patron, sino 0
preg_match("/patron/",$plano_string);
o sino:
$patron_var = "/patron/";
preg_match($patron_var, $stri);

preg_match_all() Returns the number of times  was found, sino 0
$numero = preg_match_all($patron, $str);

preg_replace() 	Returns a new string where matched pattern
$nuevo_string = preg_replace($patron, "text a cambiar", $str);


______________________________________________________
Modificadores para los patrones
$patron= /patronble/x 

i 	Para que no haga distincion de mayusculas

[abc] 	Find one character from the options between the brackets
[^abc] 	Find any character NOT between the brackets
[0-9] 	Find one character from the range 0 to 9


| 	Find a match for any one of the patterns separated by | as in: cat|dog|fish
. 	Find just one instance of any character
^ 	Finds a match as the beginning of a string as in: ^Hello
$ 	Finds a match at the end of the string as in: World$
\d 	Find a digit
\s 	Find a whitespace character
\b 	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
\uxxxx 	Find the Unicode character specified by the hexadecimal number xxxx
Quantifiers

Quantifiers define quantities:
Quantifier 	Description
n+ 	Matches any string that contains at least one n
n* 	Matches any string that contains zero or more occurrences of n
n? 	Matches any string that contains zero or one occurrences of n
n{x} 	Matches any string that contains a sequence of X n's
n{x,y} 	Matches any string that contains a sequence of X to Y n's
n{x,} 	Matches any string that contains a sequence of at least X n's
*/

//$unString es el string a operar y el patro 
$unString="algo de texto para regex con algo de numeros: 123876";
$patron="/Algo/i";  //o #algo#
echo "El string es: \n"."    ".$unString."\n";
echo "El patron es: /Algo/i \n\n";


//preg_match
print "Uso de preg_match() (0 o 1 si hay match): R".preg_match($patron,$unString)."\n";

//bracket
print "Bracket /[4]/ ".preg_match("/[4]/",$unString)."\n";
print "bracket /[8]/ ".preg_match("/[8]/",$unString)."\n";

//preg_replace()
print "Uso preg_replace(patron,a cambiar,string) \n";
$nuevoString = preg_replace("/algo/","un gran",$unString);
print "Queda asi: ".$nuevoString." \n";

//preg_match_all()
print "Cuantos espacios tiene el string?\n";
print preg_match_all("/\s/",$unString)."\n";

//reemplazar con preg_replace(patron, reemplazo, remplazado) mas ejemplos:
print "Si quisiera cambiar los espacios por 9 (nueves) \n";
print preg_replace("/\s/","9",$unString)."\n";

print "O borrar estos 9 espacios \n";
$sinEspaciosString = preg_replace("/\s/","",$unString);
print $sinEspaciosString."\n";

//substraer una coincidencia de un string
$cadena = "ruta/?var1=123";
$substraido = preg_replace("#var1=123#","",$cadena);
echo "substraido: $substraido \n";
$query="?var1=123";
$sinQuery= preg_replace("/\?$query/","",$cadena);
echo "sin query: $sinQuery \n";

// El numeral #patron# es lo mismo que /patron/ 
//Retorna 1 si hay match
print "#regex# arroja: ".preg_match("#regex#",$unString)."\n";

//Uso de este piquito ^, para match al principio de la cadena
print "#^regex# arroja: ".preg_match("#^regex#",$unString)."\n";  //Arroja 0
print "#^algo de text# arroja. ".preg_match("#^algo de text#",$unString)."\n";  //Arroja 1

//Uso del $ para match al final de la cadena
print "#algo$# arroja: ".preg_match("#algo$#",$unString)."\n";       //arroja 0
print "#876$# arroja: ".preg_match("#876$#",$unString)."\n";         //arroja 1

/*
Escape de carácter  Carácter representado   Descripción
\n                      	#x0A 	        Nueva línea
\r                      	#x0D 	        Retorno
\t                      	#x09 	        Tabulador
\\                      	\ 	            Barra inclinada invertida
\|                      	| 	            Barra vertical
\.                      	. 	            Punto
\?                      	? 	            Signo de interrogación
\*                      	* 	            Asterisco
\+                      	+ 	            Signo Más
\(                      	( 	            Paréntesis de apertura
\)                      	) 	            Paréntesis de cierre
\{                      	{ 	            Llave de apertura
\}                      	} 	            Llave de cierre
\$                      	$ 	            Signo de dólar
\-                      	- 	            Guión
\[                      	[ 	            Corchete de apertura
\]                      	] 	            Corchete de cierre
\^                      	^ 	            Acento circunflejo
*/
?>



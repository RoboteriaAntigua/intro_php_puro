<!DOCTYPE html>
<html>
<title>Introduccion a PHP </title>
<body>

<!-- Introduccion a PHP 
	Como usar?
	Tenga en cuenta que no se puede abrir directamente en el navegador, vamos a necesitar un servidor como apache.
	Entonces copiar en var/www/ y ahi abrir el navegador en localhost.

	Sino mas facil usar una extencion de visual studio code y abrir con el boton derecho
-->
<?php
echo "hola mundo, con salto de linea <br>";
echo "Aqui sin salto de linea";
echo "<p>Aqui con p </p>";
echo "<p>Otro con p </p>";
echo "<h3>Un titulo</h3>";
echo "<p>Los perl no van dentro de script, eso es para los Javascript <br></p>";print "tambien podemos imprimir como en perl, con print con o sin parentesis<br>"; 
echo "<h3>Variables son como en perl </h3>";
$vari = "tete";
echo "Valor de variable= " .  $vari . " si asi es<br>";
echo "variable dentro de las comillas asi: $vari che <br>";
$l=5;
for ($i=0;$i<$l;$i++){
	echo "Imprimo dentro de un for: $i<br>";
}
$suma=$l + $i;
print ("La suma es $suma <br><br>");

print "<h3>Data type con var_dump() </h3>";
print "<p>Data type de suma es: ".var_dump($suma)."</p>";
echo "<h3>Comentarios son igual que en c y con el agregado de # </h3><br>";

print "<h3>Float es muy facil especifica el numero de decimales <br></h3>";
$real=3.1415;
print "el numero pi con 4 digitos es: $real<br><br>";

print "<h3> arreglos </h3>";
print " se crea nuevo con var=array(elem1,2,3,elemN) <br>";
print "La longitud se usa count(arr) <br>";
print "En las ultimas dos lineas omiti el signo peso en var<br>";
$arr= array("tete",4,1,9);
$len=count($arr);
for ($i=0;$i<$len;$i++){
	print "imprimo con count(arr): arr[$i]: $arr[$i]<br>";
}


//Soy un comentario
#Tambien lo soy
/*Soy un comentario
 * de varias lineas
 */


?>
</body>
</html>


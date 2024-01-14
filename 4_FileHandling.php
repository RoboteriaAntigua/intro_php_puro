<!DOCTYPE html>
<html>
<title>File Handling  </title>
<body>
<!--
fopen("ruta","modo")

Modes 	Description
r 	Open a file for read only. 
w 	write. Arranca en el comienzo, reescribe(borrando) o crea uno nuevo
a 	append text, write(preserved). Arranca del final. O crea uno nuevo.
x 	Creates a new file for write only. 
r+ 	Open a file for read/write. Starts at the beginning of the file
w+ 	Open a file for read/write. Erases the contents of the file or creates
x+ 	Creates a new file for read/write.
a+	open a file for read/write. Arranca al final (preserva). 

fread("ruta",bytes_a_leer) ->	"lee hasta cierto byte"

filesize("ruta") ->	Devuelve tamaño en bytes de un archivo en "ruta"

fgets()	->	
-->
<h3> readfile("ruta") </h3>
<p>Guarda en buffer el contenido de un archivo </p>
<?php
$leido= readfile("./archivoTxt");
echo $leido;
?>

<h3> Open File - fopen() -fclose() -fread() -filesize()</h3>
<?php
$contenido = fopen("./archivoTxt","r");
print fread($contenido,filesize("./archivoTxt"));
fclose($contenido);
?>

<h3>Filesize() </h3>
<?php
$taman = filesize("./archivoTxt");
echo "el tamaño del archivo es: ".$taman."<br>";
?>

<h3>fread() </h3>
<?php
$content = fopen("./archivoTxt","r");
print "primeros 5 bytes: ".fread($content,5)."<br>";
fclose($content);
?>

<h3>fgets() single line </h3>
<?php
$myfile = fopen("./archivoTxt","r");
print fgets($myfile);
fclose($myfile);
?>

<h3> feof($archivo) para identificar el final de archivo </h3>
<?php
$archivo = fopen("./archivoTxt","r");
$q=1;
while(!feof($archivo)){
	print "linea $q: ".fgets($archivo)."<br>";
	$q++;
}
fclose($archivo);
?>

<h3> fgetc() Single caracter read </h3>
<?php
$lancho = fopen("./archivoTxt","r");
$t=0;
while(!feof($lancho)){
	print "caracter $t: ".fgetc($lancho)."<br>";
	$t++;
}
fclose($lancho);
print "note que t-1: $t-1 es igual a ".filesize("./archivoTxt"); 
?>

<h3>Append text "a" y fwrite() </h3>
<?php
$miarchivo = fopen("./archivoNuevo","a")or die("no se pudo ");
$txt="lalalalalalala<br>";
fwrite($miarchivo,$txt);
fwrite($miarchivo,"otra linea append<br>");
fclose($miarchivo);
echo readfile("./archivoNuevo");
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<h3>explode() rompe un string en partes, y las guarda en un array </h3>
<!-- explode("separador",$str) -->
<?php
$archivo = fopen("./archivoTxt","r");
$str = fread($archivo,filesize("./archivoTxt"));
$arr = explode (" ",$str);

for ($i=0; $i<sizeof($arr); $i++){
	print "arr[$i]: ".$arr[$i]."<br>";
}
fclose($archivo);

?>





</body>
</html>

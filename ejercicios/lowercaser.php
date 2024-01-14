<!DOCTYPE html>
<html>
<body>


<?php
/*	Un lower case, pero casero. (numero mas cercano a n)
 * Lee los numeros de un archivo externo
 * los convierte a arreglo
 * hace el lowercase, o sea el numero mas cercano a n=5 
  para ello carga todas las restas (arr[$i]-n) en otro arreglo arr2.
  * arr2 es de dos dimensiones
  * Tambien cargo las restas en un arreglo de una dimension arr_resta
  * sort arr_resta entonces arr_resta[0] es la minima diferencia.
  * recorre arr2 y pregunto si es igual a arr_resta[0].
 * indexa valor o valores, a elemento/s, quienes son el/los lower case.
 * */
$n = 5;
$archivo = fopen("./archiNumeros","r");
$str = fread($archivo,filesize("./archiNumeros"));
$arr = explode (" ",$str);

for ($i=0; $i<sizeof($arr); $i++){
	$resta= $n-$arr[$i];
	if($resta<0){$resta = $resta*(-1);}
	$arr2[0][$i]=$arr[$i];
	$arr2[1][$i]=$resta;
	$arr_resta[$i]=$resta;
}
sort($arr_resta);
print "La diferencia con el valor mas cercano es".$arr_resta[0]."<br>";

//para saber cuales son los mas cercanos
for($q=0; $q<sizeof($arr) ;$q++){
	if($arr2[1][$q]==$arr_resta[0]){
		print "los lowercase son: ".$arr2[0][$q]."<br>";
	}
}	

fclose($archivo);
?>
</body>
</html>

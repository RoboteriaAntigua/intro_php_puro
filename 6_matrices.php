<?php
//Matrices
/*
 * 1 4 9 2
 * 3 5 6 8
 * 1 6 7 9

 arr[0][0] = 1	arr[0][1] = 4 	arr[0][2] = 9	arr[0][3] = 2
 arr[1][0] = 3	arr[1][1] = 5	arr[1][2] = 6	arr[1][3] = 8
 arr[2][0] = 1	arr[2][1] = 6	arr[2][2] = 7	arr[2][3] = 9
 */
 $arr[0][0] = 1;  $arr[0][1] = 4;   $arr[0][2] = 9;   $arr[0][3] = 2;
 $arr[1][0] = 3;  $arr[1][1] = 5;   $arr[1][2] = 6;   $arr[1][3] = 8;
 $arr[2][0] = 1;  $arr[2][1] = 6;   $arr[2][2] = 7;   $arr[2][3] = 9;



print "Imprimamos la matriz <br>";
print "primer dimension arr ".sizeof($arr)."<br>"; //arroja 3 arr[este][]
print "segunda dimension arr[0] ".sizeof($arr[0])."<br>";//arroja 4

for($i=0; $i<sizeof($arr); $i++){
	for($q=0; $q<sizeof($arr[0]); $q++){
		print $arr[$i][$q];
	}
	print "<br>";
}

//Matrices sin numeros

$arr2["nombre"][0] = "Juan";	
$arr2["Apllido"][0] = "pedrosi";	
$arr2["direccion"][0] = "algo123";	


print "******************Matrices de strings*****************\n";
print "arr2['nombre']".$arr2['nombre'][0]."\n";
//print "arr2[0][0]".$arr2[0][0];	//error

$arr3["user"]["name"]="tete";
$arr3["user"]["id"]=45678;
$arr3["user"]["activo"]=true;

print "Matriz si ningun numero: ".$arr3["user"]["id"]."\n";
?>


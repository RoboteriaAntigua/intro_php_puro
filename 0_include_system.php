<?php 

//para incluir otro archivo php
include ("./8_isset.php");  //con esto podemos llamar a las funciones y clases de este otro archivo

//o si esta una carpeta atras
//include ("../otro_php.php");

//o dos carpetas atras o x carpetas atras
//include("../../otro.php");

//llamar a otro php con parametros
system("php ./12_recibe_parametros.php par1 par2 arg3 arg4");        //arroja el resultado de 12_recibe_parametros.php


//en realidad system permite ejecutar cualquier comando valido en el sistema
//system("ls");

//el segundo parametro de la funcion system guarda la salida en una variable
system("ls -l",$buffer);
echo $buffer;
?>
<?php

//Los filesystems son funciones de sistema
//ejecutar este archivo como archivo perl: sudo php 11_filesystem.php


//chmod
chmod ("./prueba.txt",0777);

//basename -> es el nombre del archivo sin la ruta
$path="/uploads/20180625_205106.jpg";
echo basename($path);
echo "\n";
echo basename($path,".jpg"); //el nombre del archivo cortando la extencion
echo "\n";

//filesize
echo filesize("prueba.txt");
echo "\n";


//clearstatcache
clearstatcache();       //borra cache que ocupan funciones php

//dirname
echo dirname("./prueba.txt");       //imprime .
echo dirname($path);                //imprime /uploads
echo "\n";

//para saber mas ver filehandling
//file() lee un archivo y guarda las lineas en arreglos
$arr = file("./prueba.txt");
echo $arr[0]."linea 0"."\n";
echo $arr[1]."linea 1"."\n";
//echo $arr; imprime todo el archivo

//file_get_contents() guarda el contenido del un archivo en un string
$cadena = file_get_contents("./prueba.txt");

//file_exists() chequea que un archivo existe
$bandera=file_exists("./prueba.txt");
echo "file_exists arroja 1 cuando si existe, estado: ".$bandera."\n";

//file_put_contents guarda un string en un archivo
file_put_contents("./prueba.txt", "texto a guardar");
//file_put_contents("./prueba.txt",$Un_string);

//que es el inode ??
echo fileinode("./prueba.txt")."\n";

//falta parse, parse_ini_file("./archivo.txt");
//parse_ini_string($cadena);

?>
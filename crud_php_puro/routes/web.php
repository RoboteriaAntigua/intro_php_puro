<?php

require '../lib/Route.php';     //traigo de una carpeta arriba la clase route

use Lib\Route;  //uso el namespace lib y de el la clase Route

//El ruteador mas sencillo del mundo seria asi
/* 
$uri = $_SERVER['REQUEST_URI'];
if('/ruta/ == $uri){
    //hago algo como redirijir
}
*/

/* Aqui abajo hacemos algo parecido al ruteador mas sencillo del mundo
    Pero usamos una clase Route, en dicha clase guardamos las rutas y las funciones en un arreglo static.
    En dicha clase usamos otro metodo dispatch para disparar una recorrida al arreglo y la evaluacion (/ruta==$uri)
    */

Route::get('/crud_php_puro/public', function (){
    echo "hola desde la pagina raiz";
});

Route::get('/crud_php_puro/public/contacto', function () {
    echo "hola desde la ruta de contacto";
});



//Paso parametros a una ruta
Route::get('/crud_php_puro/public/cursos/var', function (){
    echo "hola desde /cursos/";
});

Route::dispatch();  ///arroja la uri crud_php_puro/public/
?>
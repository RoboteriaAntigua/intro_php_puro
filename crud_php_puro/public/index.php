

<?php


//Aqui se inicia por el .htaccess. Lo dejaremos solo para importaciones 
//ver el tema de autoload
//require "../lib/Route.php";

//LLamo al archivo de rutas 
require "../routes/web.php";


/*
1_ Archivo .htaccess 
    Archivo que nos permite configuraciones de apache, como por ejemlo que el index.php sea la pagina de inicio

2_Creacion de un route casero muy similar al de laravel (ver Route.php y web.php)
    Principio: 
            if($_SERVER[REQUEST_URI]=="/ruta/deseada"){
            //hacer algo
    tambien sirve de practica sobre conceptos de poo como metodos estaticos (self::)   

*/
?>

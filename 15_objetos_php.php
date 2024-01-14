<?php


/* Como iterar un objeto .json */

//Un json es una especie de arreglo de objetos, por eso es comun saber las propiedades de estos objetos
//dado el objeto json:
//obj_json = [{"id":"2"},{"nombre":"bombay"},{"activo":"true"}];

//Un objeto js:
//obj_js = [{id:"2"},{nombre:"bombay"},{activo:"true"}];


//En realidad los objetos son instancias de las clases, pero
// en php 7 podemos instanciar de la clase estandar asi:
$obj1 = new \stdClass; // Instantiate stdClass object
$obj2 = new class{}; // Instantiate anonymous class

//objeto php 5.4+ de la clase estandar tambien:
$objeto_php = (object) [
    'id' => 452,
    'nombre' => "bombay",
    'activo' => true
  ];

//Una forma seria conociendo el key
foreach($objeto_php as $key => $value){
echo $key." ".$value."\n";}                    
/* Imprime:
id 452
nombre bombay
activo 1
*/

/*Sino Convirtiendo a array: */















?>

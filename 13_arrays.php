<?php

/* ******************* Arreglos en php  ********************/

//definicion con datos
$arreglo = [
    'gol',
    'suran',
    'polo'
    ];
echo $arreglo[0]."\n";      //gol

//definicion sin datos
$arr2 = [];
$arr2[0]='tete';
$arr2[1]='pepe';
$arr2[2]='tuca';

//Length no existe es count($arr)
for ($i=0; $i<count($arr2); $i++){
echo $arr2[$i]." ";                    // tete pepe tuca
}
echo "\n";

//Arreglos asociativos
$capas = [
    'capa1' => 'fisica',
    'capa2' => 'Enlace',
    'capa3' => 'Red',
    'capa4' => 'Transporte',
    'capa5' => 'Sesion',
    'capa6' => 'Presentacion',
    'capa7' => 'Aplicacion'
];
//Acceder a un elemento con key identificador:
echo $capas['capa1']."\n";       //arroja fisca

//o de la forma tradicional:
//echo $capas[1]."\n";      //arroja error

//var_dump($var) sirve para saber el tipo de una variable y su contenido
echo var_dump($capas)."\n";

//Longitud de la primera dimension
$len1 = count($capas);
echo $len1."\n";    // 7

//Arreglo de arreglos
$capas2 = [
    'capa1' => ['fisica','Define las características del hardware de red. '],
    'capa2' => ['Enlace', 'Administra la transferencia de datos'],
    'capa3' => ['Red', 'Administra las direcciones de datos y la transferencia entre redes. '],
    'capa4' => ['Transporte', 'Administra la transferencia de datos' ],
    'capa5' => ['Sesion', 'Administra las conexiones y terminaciones entre los sistemas que cooperan. '],
    'capa6' => ['Presentacion', 'Se asegura de que la información se transfiera al sistema receptor de un modo comprensible'],
    'capa7' => ['Aplicacion', 'Correo, dns, ftp, http']
];

//Contamos todos los elementos de manera recursiva
$lenJK = count ($capas2,COUNT_RECURSIVE);
echo $lenJK."\n";                //Arroja 21

//La longitud del arreglo capa1 adentro del arrreglo capas2
$lenK = count($capas2['capa1']); 
echo $lenK."\n";                //Imprime 2






?>
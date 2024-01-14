<?php

//Algunas funciones para manipular la url
//Parseamos la url
$uri = $_SERVER['REQUEST_URI'];     
$method = $_SERVER['REQUEST_METHOD'];
echo "Usando la variable superglobal $ _ SERVER <br>";
echo "la uri o path(ruta): ".$uri."<br>";       ///arroja la uri /crud_php_puro/public/
echo "El metodo".$method."<br><br>";              // arroja GET

//La url es el host + uri
$host= $_SERVER["HTTP_HOST"];
echo "la url es host.uri";
$url="http://" .$host.$uri;         //En php se concatena con un punto string1.string2
echo $url."<br>";

//Parse guarda todo en un array, y se usa con la url no con la uri
echo "<h3>parse_url($ url) </h3>";
echo "Guarda la url en un array<br>";            
$parseada = parse_url($url);
echo "el host: ".$parseada["host"]."<br>";
echo "el path/ruta o uri: ".$parseada["path"]."<br>";
echo "la query: ".$parseada["query"]."<br>";

//tambien se puede ahorrar codigo asi:
echo parse_url($url,PHP_URL_PATH);
/* parametros posibles: 
PHP_URL_SCHEME, PHP_URL_HOST, PHP_URL_PORT, PHP_URL_USER, PHP_URL_PASS, 
PHP_URL_PATH, PHP_URL_QUERY o PHP_URL_FRAGMENT
*/

//var_dump($ var)
echo "<h3>var_dump ($ var) </h3>retorna el tipo de una variable y su contenido: <br>";
echo var_dump($parseada);

//$_GET 
echo "la variable superglobal $ _get tambien es util para rescatar las variables pasadas por la url <br>";
echo $_GET["var1"]; //para ?var1=abc 
echo "<br>";

//Obtener el path sin la query
$query= $parseada["query"];
echo $query."<br>";
$ruta = preg_replace("/\?$query/","",$uri);
echo "solo ruta sin query: $ruta <br>";
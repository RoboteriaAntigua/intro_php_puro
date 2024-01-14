<?php


namespace lib;


//Creamos la clase con metodos estaticos 
//self se usa como $this pero en metodos estaticos.
//$this es: este atributo de esta instancia
//self es: este atributo estatic de la clase.
class Route
{

    //2 metodos permiten guardar en un array ($routes) la uri y una funcion asociada a cada uri
    public static $routes = [];
    
    public static function get($uri, $callback)
    {        //$callback es una funcion que le pasamos desde el index
        $uri = trim($uri, '/');
        self::$routes['GET'][$uri] = $callback;           //$uri es el identificador url pero sin la ruta, solo lo ultimo
    }
    public static function post($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $callback;
    }

    //Metodo para recuperar la uri
    public static function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        echo $uri . "<br>";       ///arroja la uri /crud_php_puro/public/
        echo $method . "<br><br>";              // arroja GET     
        //uri sin slash/ para poder evaluar bien
        $uri = trim($uri, '/');
        foreach (self::$routes[$method] as $ruta_evaluada => $callback) {

            /* En lugar de esta pregunta usamos regex por la query que viene despues del uri: (por ej: ?cosas=lala&var2=123)
           if($ruta_evaluada==$uri){ 
                $callback();                    //LLama a la funcion del web.php correspondiente a la uri
                return;                         //cierro la funcion if y todas las funciones contenedoras (dispatch)
            }
            */


            echo "ruta evaluada: " . $ruta_evaluada . "<br>";              //Imprime lo que tenemos en la url
            echo "ruta del arreglo sin query " . $uri . "<br>";    //Imprime lo que le cargamos al array en el web.php pero sin la query
            /*
            if(preg_match("#^$uri$#",$ruta_evaluada)){
                $callback();
                return;
            }
            */
        }
    }
}

/* El arreglo queda asi
$routes = [
    'GET' => ['uri' => 'callback'],
    'POST' => ['uri' => 'callback']
];
*/

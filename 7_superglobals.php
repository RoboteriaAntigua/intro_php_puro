<!DOCTYPE html>
<html>
<title>  </title>
<body>
<h3>Variables "superglobales" </h3>

<p> Son un conjunto de variables predefinidas, para todo proyecto </p>
<br>
<?php


// GLOBALS['variable']
//Sirve para usar variables fuera de su ambito
$variable="123456789 soy variable global";

function myfuncion (){
    //echo "mi variable es: $variable"; //Esto daria error, porque $variable no esta definida en este ambito
    echo "<h3>GLOBALS[]</h3>";
    echo "la variable es: ".$GLOBALS["variable"];
    }
myfuncion();


//_SERVER[]
print "<h3>SERVER </h3>";
//Es un arreglo con pares key/value, que contiene info http principalmente

//"El user es: "
print "REMOTE_USER".$SERVER['REMOTE_USER']."<br>";

//"El directorio raíz del server en el cual se está ejecutando el script actual:"
print "DOCUMENT_ROOT".$_SERVER['DOCUMENT_ROOT']."<br>";

//"El archivo que estamos viendo es: "
print "PHP_SELF".$_SERVER['PHP_SELF']."<br>";

//El verbo de la peticion:
print "REQUEST_METHOD".$_SERVER["REQUEST_METHOD"]."<br>";

//"Fecha unix de inicio de peticion "
print "REQUEST_TIME".$_SERVER['REQUEST_TIME']."<br>";

//"Si existe la cadena de peticion de la pagina, por ej: ?nombre="topo"&edad=36
print "QUERY_STRING".$_SERVER['QUERY_STRING']."<br>";

//"HTTPS retorna un valor no null, si la solicitud es https"
print "HTTPS".$_SERVER['HTTPS']."<br>";

//"La direccion desde la cual, ve la pagina el usuario".
print "REMOTE_ADDR".$_SERVER['REMOTE_ADDR']."<br>";

//"El host desde la cual, ve la pagina el usuario".
print "REMOTE_HOST".$_SERVER['REMOTE_HOST']."<br>";

//"El puerto empleado por el usuario desde la cual, ve la pagina".
print "REMOTE_PORT".$_SERVER['REMOTE_PORT']."<br>";

//"La ruta del script ejecutándose actualmente en forma absoluta. ".
print "SCRIPT_FILENAME".$_SERVER['SCRIPT_FILENAME']."<br>";

//"El puerto de la máquina del servidor usado ".
print "SERVER_PORT".$_SERVER['SERVER_PORT']."<br>";


/*"Contiene la ruta del script actual. Esto es de utilidad para las páginas que necesiten apuntarse a si mismas.*/
print "SCRIPT_NAME".$_SERVER['SCRIPT_NAME']."<br>";

//"La URI que se empleó para acceder a la página.".
print "REQUEST_URI".$_SERVER['REQUEST_URI']."<br>";


/*Cuando se hace autenticación HTTP, esta variable se establece para el nombre de usuario provisto por el usuario. */
print "PHP_AUTH_USER".$_SERVER['PHP_AUTH_USER']."<br>";


/*"Cuando se hace autenticación HTTP, esta variable se  para la clave provista por el usuario. ".*/
print "PHP_AUTH_PW".$_SERVER['PHP_AUTH_PW']."<br>";

/*Cuando se realiza la autenticación HTTP, está variable se establece para el tipo de autenticación. */
print "AUTH_TYPE".$_SERVER['AUTH_TYPE']."<br>";
?>
<h3> _GET y _POST </h3>
<?php
/* Lo obtenido de un formulario, get por la uri y post en secreto */
echo '_get ' . htmlspecialchars($_GET["nombre"]) . '!';
echo "_post es igual, pero viene en la peticion mas no en la url";



?>
</body>
</html>


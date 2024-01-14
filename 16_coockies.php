<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cookies se escribe sin c </h1>

<!--********************************    Cookies en php ******************************************-->
<?php
/* Crear una cookie:
        setcookie("nombre_de_la_cookie",valor,expiracion,ruta,dominio); */

    $variable1 ="un valor 123";
    setcookie("migalleta", "mivalor"); 

//setcookie retorna true si se pude crear    
    if(setcookie("nombre_de_cookie",$variable1,time() + (60 * 60 * 24 * 365))){
        print "la cookie fue guardada \n";
    };
    

//recuperar una cookie puede hacerse desde cualquier pagina (no solo la actual) util para pasar info
echo "recuperada la cookie: <br>";
print $_COOKIE["nombre_de_cookie"]; 
   ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/**************************************************************************************************************    
Cuando queremos utilizar variables de sesión en una página tenemos que iniciar la sesión con la siguiente función:
        session_start ()

La sesión se tiene que inicializar antes de escribir cualquier texto en la página.
Esto es importante y de no hacerlo así corremos el riesgo de recibir un error, porque al iniciar la sesión se deben leer las cookies del usuario, 
algo que no se puede hacer si ya se han enviado las cabeceras del HTTP

Este metodo crea una sesion nueva o abre una existente.
*/
session_start();

?>
<h1>Trabajo con sesiones en PHP</h1>

<?php
//Definimos una variable de sesion:
$_SESSION['variable1']="Usuarioloco lala";
echo $_SESSION['variable1']."<br>";
?>

<?php 
/* Podemos iniciar sesion e introducir una variable al mismo tiempo con el metodo: session_register('var2')
    session_register('var2');       //da error ver poque
*/
?>

<h2>Ejemplo contador </h2>      
<?php           

if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=1;
}else{
$_SESSION["contador"]++;
}
echo "has visitado esta pagina".$_SESSION['contador']." veces <br>";
?>

<h2>****************************************************************************************************** 
    Todas estas variables en el navegador se guardan como cookies, y amenos que le indiquemos el nombre y valor
    esta encriptado por el navegador
    *************************************************************************************************</h2>

<h2>Cerrar session </h2>
<?php
/*
    Las sesiones se pueden cerrar de varias maneras:

    El usuario puede cerrar la sesión simplemente cerrando el navegador (no basta con cerrar las pestañas).
    Un programa puede cerrar la sesión mediante la función session_destroy(). */ 
    session_destroy();
?>

<h2>Nombre de sesión</h2>
<?php
/***************************************************************************************************
 * En principio, cuando el navegador se conecta a un servidor, la sesión es única, es decir, 
 * todas las páginas del mismo dominio compartirán la misma matriz $_SESSION. 
 * La función session_name() permite establecer un nombre de sesión específico, 
 * de manera que todas las páginas que declaren el mismo nombre de sesión accederán a la misma matriz $_SESSION */

 //Definir variable en la sesion1
 session_name("sesion1");
 session_start();
 $_SESSION["nombre"]="juanelo";
 ?>


<?php
//Acceder a valor de la variable en session 1
session_name("sesion1");
echo "el nombre en sesion 1 es: ".$_SESSION["nombre"];
?>


<h2>Borrar elementos de la sesión</h2>
<?php
//Los valores de $_SESSION se borran como en cualquier otra matriz mediante la función unset().
//En realidad recomendable usar session_unset() que borra todos los valores, y se puede seguir usando la matriz $_SESSION[][]

if( isset($_SESSION["nombre"])){
    echo "existe la variable de session llamada: nombre y procedemos a borrarla";
    unset($_SESSION["nombre"]);
}
if( ! isset($_SESSION["nombre"])){
    echo "ahora si que no existe la variable de session llamada: nombre";
}
?>

<h2>Como funcionan las sesiones</h2>
<?php
/**********************************************************************************************************************
 * En el navegador se guarda como cookie con un id.
 * En el server se guarda en un archivo temporal: en directorios cuya ubicación se puede establecer 
  con la directiva de PHP session.save_path o modificar en una página con la función sesion_save_path(). 

  Al crear una sesión, el servidor asigna un identificador al usuario. Este identificador se guarda en el ordenador del cliente en forma de cookie, mientras que en el servidor se guarda un fichero con los valores de las variables de sesión. 

*/


?>
</body>
</html>
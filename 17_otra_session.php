<?php

//Accediendo a una variable de sesion definida en otro archivo (primero abrir 17_sesiones.php)
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sesiones definidas en otro archivo </h1>
    <?php
    echo $_SESSION['variable1'];
    ?>

    <h2>Cookie definida en otro archivo</h2>
    <?php
    echo "recuperada la cookie: <br>";
    print $_COOKIE["nombre_de_cookie"];
    ?>
</body>

</html>
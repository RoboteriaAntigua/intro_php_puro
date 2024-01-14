<!DOCTYPE html>
<html>
<title>  </title>
<body>
<h3>Prepared </h3>
<p> Sirve para hacer mas rapido </p>


<?php
$servername = "localhost";
$username = "tete";
$password = "123";
$dbname = "desdePHP";




// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);



// prepare and bind (unir)
$stmt = $conexion->prepare("INSERT INTO reportes (tecnico, sucursal, solucion) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $tecnico, $sucursal, $solucion);

// set parameters and execute
$tecnico = "John";
$sucursal = 45;
$solucion = "que te importa che";
$stmt->execute();

$tecnico = "Mary";
$sucursal = 32;
$solucion = "Alla estan solucionando";
$stmt->execute();

$tecnico = "Julie";
$sucursal = 14;
$solucion = "Para divertirse llamar al 1235457662";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conexion->close();
?> 


</body>
</html>


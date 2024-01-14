<!DOCTYPE html>
<html>
<title> </title>

<body>

	<!--Conceptos previos:
	$var->funcion // El signo -> es lo mismo que $var.funcion()
	=== //Compara si valen lo mismo y son del mismo tipo
	Una vez conectado con sql -->

	<?php
	$servername = "localhost";
	$username = "tete";
	$password = "123";

	// Create connection, como si fuese un objeto
	$con = new mysqli($servername, $username, $password); //o   mysqli_connect($servername,$username,$password);

	//Check connection 
	if ($con) {  //o  if(!$con)
		echo "Connection falladisima: " . $con->connect_error;
	}
	print "Conectados\n";



	//Crear base de datos
	$sql = "create database desdePHP";
	//comprobacion === 3 igual compara valor y tipo de dato
	if ($con->query($sql) === TRUE) { // o mysqli_query($con,$sql) o sea mysqli(coneccion,query)
		print "se creo bien\n";
	} else {
		print "error no se creo\n";
	}


	//mysqli($con,$sql);
	$con->close();  //o mysqli_close($con);
	//Para cerrar la conexion de otra forma
	//mysqli_close($con);

	?>

</body>

</html>
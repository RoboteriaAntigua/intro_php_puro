<!DOCTYPE html>
<html>
<title> Creando talbas </title>
<body>



<h3> Tablas en mysql </h3>
<p> Nota: Esta forma aplica a casi todos los metodos constructivos y destructivos de sql </p>

<?php

//debemos crear la conexion y a la base de datos 
$servername = 'localhost';
$username = 'tete';
$password = '123';
$dbname = 'desdePHP';

//conexion
$conexion = new mysqli($servername,$username,$password,$dbname);

//create table , pero aplica a update, delete, insert into, etc
$sql="create table reportes (id int unsigned auto_increment primary key, tecnico varchar(20), sucursal int not null,solucion varchar(100))";
$conexion->query($sql);
$conexion->close();

$conexion2= new mysqli($servername,$username,$password,$dbname);
$sql="insert into reportes(tecnico, sucursal,solucion) values ('jorge',41,'se cambio placa de cerradura'),('lucal soto',23,'se limipio escanner'),('luis galvan',38,'se rasco las bolas')";
if ($conexion2->query($sql) === TRUE) {
  echo "valores agregados con exito\n";
} 

$conexion2->close();
?>

</body>
</html>


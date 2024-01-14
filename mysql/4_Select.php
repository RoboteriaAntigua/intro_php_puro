<!DOCTYPE html>
<html>
<title>  </title>
<body>

<?php
$servername = 'localhost';
$username = 'tete';
$password = '123';
$dbname = 'desdePHP';

$conexion = new mysqli($servername,$username,$password,$dbname);

//guardamos la query en una variable
$result = mysqli_query($conexion, "SELECT * FROM reportes");

/*
//Esta funcion pone toda la tabla en un arreglo, y cada vez que se la llama
    retorna otro elemento
$valor = mysqli_fetch_array($result);
echo $valor['tecnico']."<br>";          //muestra jorge
$otro = mysqli_fetch_array($result);    //muestra lucas soto
echo $otro['tecnico']."<br>";
//y asi cada vez que llamamos a la funcion //etc
*/
//Muestro todos los campos de la columna tecnico
while($fila =mysqli_fetch_array($result)){
echo $fila['tecnico']."<br>";
}
mysqli_free_result($result);

//otra query
$query2 = mysqli_query($conexion, "select * from reportes where sucursal=14");
while($fila_por_fila=mysqli_fetch_array($query2)){
    echo $fila_por_fila['tecnico']." ".$fila_por_fila['solucion']."<br>";
    }

mysqli_close($conexion);

?>

</body>
</html>


<!DOCTYPE html>
<html>
<title> </title>
<body>
<h3>Recuperado del cliente </h3>

<?php
$nombre = $_GET["name"];
$email = $_GET["email"];
echo "<h3>Datos recuperados </h3>";
echo $nombre, $email;

?>


<h3> Con comprobacion de metodo http y una funcion de seguridad </h3>
<?php
//Con comprobacion de metodo de http de peticion
if($_SERVER["REQUEST_METHOD"] == "GET"){            
$nombre2 = funcion_seguridad($_GET["name"]);
$email2 = funcion_seguridad($_GET["email"]);
}

/* Con una funcion de seguridad:
    htmlspecialchars() cambia caracteres como < por &lt; o sea convierte
    caracteres especiales html 
    */
function funcion_seguridad ($data){
//$data = trim($data);                //quita caracteres como espacios,tab,saltos de linea 
//$data = stripslashes($data);        //quita barras invertidas que pueda agregar un hacker
$data = htmlspecialchars($data);
return $data;
}
echo "<h3>Recuperado</h3>";
echo $nombre2,$email2;
?>


</body>
</html>


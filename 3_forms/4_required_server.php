<!DOCTYPE html>
<html>
<title>4_required_server </title>
<body>
<h3>Recuperado del cliente </h3>
<?php
// Defino algunas variables:
$name = $email = "";



//$_SERVER["REQUEST_METHOD"] retorna el metodo (get or post) que recibimos de un form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = funcion_seguridad($_POST["name"]);
  $email = funcion_seguridad($_POST["email"]);
  
}

//Por seguridad se hacen estas cosas, para que funcione basta con htmlespcialchars
function funcion_seguridad($data) {
  //$data = trim($data);                //quita caracteres como espacios,tab,saltos de linea 
  //$data = stripslashes($data);        //quita barras invertidas que pueda agregar un hacker
  $data = htmlspecialchars($data);      //cambia caracteres como < por &lt; convierte caracteres especiales html 
  return $data;
}
?>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>
</body>
</html>



<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
/* En este caso el form apunta a esta misma pagina, despues del submit nos quedamos aca */

// Defino algunas variables
$name = $email = $gender = $comment = $website = "";


//$_SERVER["REQUEST_METHOD"] es una variable superglobal que retorna el request_method 
//proviniente de un form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

//Esto previene ataques por inyeccion de codigo
function test_input($data) {
  $data = trim($data);          //trim($string) quita caracteres inesesarios como espacios
  $data = stripslashes($data);  //remuevo barras invertidas '\'
  $data = htmlspecialchars($data); //convierte caracteres especiales en elementos HTML
  return $data;
}
?>

<!--Notemos que el action apunta a este mismo script/pagina -->
<!--$_SERVER["PHP_SELF"] es una variable superglobal que retorna el nombre del script actual -->
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>


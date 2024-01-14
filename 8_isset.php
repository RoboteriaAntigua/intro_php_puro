<!DOCTYPE html>
<body>

<h3>Isset </h3>

<?php

//Retorna true si variable existe (esta definida)


//Su uso: Si tal variable no esta definida la definimos
//Se la emplea con ! de tal forma que retorna true cuando no existe, entonces la definimos.


if( ! isset($var1)){
    echo "dicha variable no esta definida<br>";
    $var1=1;
}

echo $var1;



?>
</body>
</html>
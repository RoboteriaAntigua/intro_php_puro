<?php

//archivo php que recibe parametros


echo "El primer argumento/parametro recibidos es:".$argv[1]."\n";

echo "el $ argv[0] es el nombre del archivo: ".$argv[0]."\n";

echo "el numero de argumentos recibidos son: ".$argc."\n";

for ($i=1; $i<=$argc ; $i++){
    echo "argumento: ".$argv[$i]."\n";
}
?>
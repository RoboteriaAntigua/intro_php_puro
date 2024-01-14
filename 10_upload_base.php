<?php

//subir archivos basico, sin comprobacion de errores, supercencillo.
//Previamente crear la carpeta uploads y darle permisos con chmod 777 uploads

$target_file="./uploads/".$_FILES["fileToUpload"]["name"];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
    
/* Usamos la variable global $_FILES[][] detalla en 9.
    Usamos la funcion move_uploaded_file(archivoAsubir,destino)
*/
  ?>
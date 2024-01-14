<?php

/*************** *  _FILES **********************************/
/*
    Es un array proviniente del form (multipart/data) con la info del archivo a subir 
    _FILES["nombre_del_archivo"]["opciones"]

        $_FILES['fichero_usuario']['name']  -> El nombre original del fichero en la máquina del cliente.
              
        $_FILES['fichero_usuario']['type'] -> El tipo MIME del fichero, si el navegador proporcionó esta información. Un ejemplo sería "image/gif".
             Este tipo MIME, sin embargo, no se comprueba en el lado de PHP y por lo tanto no se garantiza su valor.
        $_FILES['fichero_usuario']['size']  -> El tamaño, en bytes, del fichero subido.
            
        $_FILES['fichero_usuario']['tmp_name'] -> El nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.
            
        $_FILES['fichero_usuario']['error'] -> El código de error asociado a esta subida.
            
*/

//fileToUpload es una variable recibida del form  9_upload.html

echo "nombre original del archivo: ".$_FILES["fileToUpload"]["name"]."<br>";
echo "tipo: ".$_FILES['fileToUpload']["type"]."<br>";
echo "tamano: ".$_FILES['fileToUpload']["size"]."<br>";
echo "Nombre temporal: ".$_FILES['fileToUpload']['tmp_name']."<br>";
echo "codigo de error de la subida, cero si no hay: ".$_FILES['fileToUpload']['error']."<br>";


$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


//tipo de la imagen: $_FILES["fileToUpload"]["type"] retorna  image/jpeg o image/bmp
//uso expresion regulares
/****************preg_match("/patron/",$variable) *********************/
if(preg_match("/jpeg/",$_FILES["fileToUpload"]["type"])){
    $imageFileType = "jpg";
}else if (preg_match("/bmp/",$_FILES["fileToUpload"]["type"])){
    $imageFileType ="bmp";
}else if (preg_match("/png/",$_FILES["fileToUpload"]["type"])){
    $imageFileType ="png";
}else{
    echo "formato no valido";
}

echo "para subir en: ".$target_dir."<br>";
echo "nombre del archivo subido: ".$target_file."<br>";
echo "tipo: ".$imageFileType."<br>";


$uploadOk=1;    //Si alguna comprobacion falla cambia a cero
/********file_exists()*********** */
// Check si ya existe el nombre destino
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 15000000) {   //no mas de 15 megas
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}else {
    echo "el tamaño esta dentro de la capacidad<br>";
}




// move_uploaded_file ($subir,$target_file) es la funcion que sube la foto en cuestion
if ($uploadOk == 0) {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ".$_FILES["fileToUpload"]["name"]. " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

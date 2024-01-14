<?php

/*
############## Metodos estaticos ###################
|                                                                       |
|                                                                       |
|                                                                       |
|#######################################################################
*/




/*Los metodos abstractos pueden ser accedidos sin nesesidad de ser instanciados */
echo "<h3>Metodos estaticos de las clases</h3>";
class nombre_clase {
    public static function metodo_estatico(){
        return "soy un metodo estatico";
    }
}
echo "usando un metodo estatico: ".nombre_clase::metodo_estatico();
echo "<br>";




/*Un metodo abstracto puede ser accedido desde la propia clase, usando self:: */
class gran_clase {
    public static function welcome() {
      echo "Con  1   self::       !<br>";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  echo "Un metodo con self::";
  new gran_clase();





/*Heredando un metodo estatico en otra clase, usamos la keyword parent */
  echo "<h3>keyword parent para heredar metodos staticos </h3>";
class madre {
    public static $variable= "100";
}

class child extends madre {
    public function imprime(){
        echo "heredando de la madre un estatico con parent::value".parent::$variable;
    }
}

$obj = new child();
$obj->imprime();









?>
<?php

/*
##############    POO avanzado         #################
|                                                      |
|                                                      |
|                                                      |
|#######################################################
*/


/*Clases y metodos abastractos
        Son clases unicamente echas para ser heredadas, o sea para ser clases padre. 
        Tienen almenos un metodo 'abstracto', o sea declarado pero que no hace nada.
        Entonces como o que hace el metodo abstracto lo define la clase hijo que lo hereda.
            Para ello hay un par de reglas:
                    ~debe tener el mismo ambito, o mas amplio
                    ~debe tener el mismo o mas numero de argumentos
                    ~debe llamarce igual
*/
echo "<h3>Metodos abstractos</h3>";

abstract class padre {
    public $nombre;
    public function __construct($nombre){
        $this->nombre=$nombre;
    }
    abstract public function metodo_abstracto(): string;       
} 


class hija1 extends padre {
    public function metodo_abstracto(): string
    {
        return "el hijo $this->nombre si hace cosas ";
    }
}


class hija2 extends padre {
    public function metodo_abstracto(): string
    {
        return "el hijo $this->nombre si que hace coasas";
    }
}

$obj = new hija1("pepe");
$obj2 = new hija2("josefa");
echo "metodo abstracto usado por hijo1: ".$obj->metodo_abstracto();
echo "metodo abstracto usado por hijo2: ".$obj2->metodo_abstracto();


/*Interfacez son como las clases abstractas con algunas diferencias:
        ~Las interfaze se implentan usando implements en lugar de extends, class hija implements padre(){}
        ~los metodos de las interfaces son siempre publicos, mientras que los de las clases abstractas pueden ser publicos o protected
        ~Las interfaces no tienen ningun metodo que hace cosas, o sea, ninguna propiedad
        ~Una clase puede heredar de otra clase y tambien implementar al mismo tiempo
        */

        echo "<br><br> <h3>traits </h3>";

/*Tratos / traits
        ~Son metodos que pueden ser usados por muchas clases distintas
        ~Dichos metodos pueden ser abstractos o comunes
        ~Pueden ser protected, private y public:
        */

        trait Nombre_trato {
            public function msj1 (){
            return "111111 trato 111111";
            }
        }

        class clase_alfa {
            use Nombre_trato;
        }

        class clase_omega {
            use Nombre_trato;
        }

        //Instanciacion
        $obj1 = new clase_alfa();
        $obj2 = new clase_omega;

        echo "Con traits reducimos el codigo, ".$obj1->msj1()." y mas reduccion ".$obj2->msj1();
?>

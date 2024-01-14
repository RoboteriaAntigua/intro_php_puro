<?PHP
/*
##############Introduccion a la poo en #################
|                                                      |
|                                                      |
|                                                      |
|#######################################################
*/


/*Crear una clase, un objeto, llamar a sus metodos, cambiar sus variables.*/

class alfa1 {
    public $nombre; 
    public $id;     
    
    function __construct($n, $pid){
        $this->nombre =$n;
        $this->id = $pid;
    }
    function randomizo (){
        return rand(1,10);      //numero random del 1 al 10
    }
}



//instanciacion
$obj1 = new alfa1("objeto1",1);
echo "El nombre del objeto 1 es: <br>";
echo $obj1->nombre."<br>";
echo $obj1->id."<br>";



//Llamo a sus metodos
echo "random " . $obj1->randomizo() . "<br>";



//cambio sus variables
$obj1->nombre="tete";
$obj1->id= rand(100,2000);  //Numero random del 100 al 2000
echo "cambiado, nombre: $obj1->nombre id: $obj1->id <br>";

//agrego un atributo nuevo a un objeto
$obj1->atributo_nuevo="tete";

//declaro muchos objetos
$obj2 = new alfa1("algo",1);

$obj3 = new alfa1("toto",rand(1,10));
echo "un rand del 1 al 10 pasado como parametro $obj3->id y el nombre: $obj3->nombre";

$obj4 = new alfa1("<h3>esta aver </h3>",4);
echo "html renderizado por php".$obj4->nombre;

$string1 = "<h3>Un titulo </h3><br><p>Renderizando algo de html en php, pero pasado como argumento al constructor de un objeto</p>";
$obj5 = new alfa1($string1,rand(100,1000));
echo "mas renderizacion: $obj5->nombre ";




//destructores
//Son llamados cuando el objeto es destruido y cuando el script concluye
class beta2 {
    public $var1;
    public $var2;
    function __construct($v1,$v2)
    {
        $this->var1=$v1;
        $this->var2=$v2;
    }
    function __destruct()
    {
        echo "soy una llamada a la destruccion destruct<br>";
    }
}
/*$obj_autodestroy = new beta2( rand(1,10) , rand(11,20) );
echo "una pause<br>";
$obj_autodestroy->__destruct(); //Destruyo el objeto
*/




/*Sobre los modificadores de acceso

    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class
*/




//Herencia
class omega4 extends alfa1 {
    function mensaje() {
        echo "todos los metodos y atributos de su padre, mas nuevos <br>";
         }
}
$obj_herencia = new omega4("tete",rand(4,99));
echo "a ver la variable heredada: $obj_herencia->nombre <br>";




//alcance de resolucion :: y constantes
/*las constantes definidas en una clase, pueden ser accedidas sin nesesidad de su instanciacion, y fuera de la clase */
class delta9 {
    const mensaje2= "Soy un mensaje y Estoy en una clase, no un objeto";
    }

    echo delta9::mensaje2."\n";



//Agregar metodos a un array adentro de la clase
class osi {
    public $capas = [];        //A este arreglo le queremos agregar elementos
    public function funcion1 ($par1,$par2){
        $this->capas['gete'][$par1]= $par2;
    } 
    public function funcion2 ($par1,$par2){
        $this->capas['posto'][$par1]=$par2;
    }
}
$osiObj = new osi();
$osiObj->funcion1('uri','callback');
$osiObj->funcion2('uri','otra_cosa');

echo count($osiObj->capas, COUNT_RECURSIVE)."\n";
echo $osiObj->capas['gete']['uri']."\n";        //Imprime callback
echo $osiObj->capas['posto']['uri']."\n";       //Imprime otra cosa

/*Entonces creamos esta matriz adentro del objeto osiObj
capas = [
    'gete' => ['uri' => 'callback'],
    'posto' => ['uri' => 'otra_cosa']
];
*/

/*Diferente de hacer
$this->capas['gete']=[$par1, $par2];
en este caso creamos el arreglo asi:
capas = [
    'gete' => ['uri','callback']
];
*/

//Misma clase pero estatica seria asi:
class osiE {
    public static $capas = [];
    public static function funcion1 ($par1,$par2){
        self::$capas['gete'][$par1] =$par2;
    }
    public static function funcion2 ($par1,$par2){
        self::$capas['posto'][$par1]=$par2;
    }
}
osiE::funcion1('urix','tal cosa');
echo osiE::$capas['gete']['urix']."\n"; //imprime tal cosa
?>

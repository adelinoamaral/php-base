<?php

// Class definition
class Automobile
{
    // Declare  properties
    public $fuel;
    protected $engine;
     // private - só acessível dentro da classe, dentro de um método. 
     // os objetos não sabem da sua existência
    private $transmission; 
}


// definição da classe Car como extensão da classe Automobile (base)
class Car extends Automobile
{
    // construtor
    public function __construct(){
        echo 'A classe "' . __CLASS__ . '" foi inicializada!<br />';
    }

    // permite alterar o valor do atributo $engine
    public function setEngine($value){
        $this->engine = $value;
    }

    public function viewEngine(){
        return $this->engine;
    }
}


// Uma nova forma de definir certas propriedades no PHP 8
class Pesado extends Automobile
{
    // PHP8 - permite definir as propriedades no construtor e não fora deste
    // Property Promotion
    public function __construct(public $cor, public $cilindrade)
    {
        $this->cor = $cor;
        $this->cilindrade = $cilindrade;
    }

    public function mostraDados()
    {
        echo "O carro tem cor: " . $this->cor . " e cilindrade: " . $this->cilindrade;
        
    }
}

// cria um objeto a partir da classe Automobile
$automobile = new Automobile;
 
// atribuição de valores ao objeto $automobile
$automobile->fuel           = 'Petrol'; // ok
/*
$automobile->engine         = '1500 cc'; // fatal error
$automobile->transmission   = 'Manual'; // fatal error
*/

// cria um objeto a partir da classe Car
$car = new Car;
 
// atribuição de valores ao objeto $car
$car->fuel          = 'Diesel'; // ok

// $car->engine        = '2200 cc'; // fatal error

// solução
$car->setEngine('2200 cc');
echo $car->viewEngine();

// $car->transmission  = 'Automatic'; // undefined

echo "<br>";

// o nome das classes não são sensiveis às letras maiúsculas ou minúscula
// Sugere-se seguir o formato da construção da classe Pesado
$scania = new pesado("Vermelho", "1500");
$scania->mostraDados();

echo "<br>";
echo "Outra forma: ";
echo "<br>";
// Também poderiamos definir diretamente pois as propriedades são publicas
echo "O carro tem cor: " . $scania->cor . " e cilindrade: " . $scania->cilindrade;
        
?>
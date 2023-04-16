<?php
class Calculadora{
    
    //propiedades o también conocidas como estado de la clase
    private $numero1;
    private $numero2;
    
    //constructor vacio
    public function __construct(){
        $this->numero1=0; //inicializa $numero1 a cero
        $this->numero2=0; //inicializa $numero2 a cero
    }
    
    /*
    NOTA: en php, las clases no admiten sobrecarga, por lo tanto los dos constructores siguientes se tomaran como
    errores fatales. 
    */

    //constructor con un parámetro
    public function __construct($numero1){
        $this->numero1=$numero1; // inicializa $numero1 con el valor de $numero1 que viene al crear el objeto
    }
    
    //constructor con 2 parámetros
    public function __construct($numero1, $numero2){
        $this->numero1=$numero1; // inicializa $numero1 con el valor de $numero1 que viene al crear el objeto
        $this->numero2=$numero2; // inicializa $numero2 con el valor de $numero2 que viene al crear el objeto
    }
    
}

//crear un objeto utilizando el constructor vacio
$calculadora= new Calculadora();
// se crea el objeto utilizando el constructor que tiene un parámetro
$calculadora1= new Calculadora(2);
// se crea el objeto utilizando el constructor que tiene dos parámetros
$calculadora2= new Calculadora(5,8);
?>
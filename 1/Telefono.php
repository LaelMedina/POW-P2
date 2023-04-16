<?php

// MODIFICADORES DE ACCESO
// Permiten restringir el acceso a las variables y métodos de una clase, esto es el
// encapsulamiento (public, default y private). Cuando en un atributo o método se omita el
// modificador de acceso, será considerado como public.


class Telefono{
    //propiedades o también conocidas como estado de la clase
    // es un atributo de tipo private y no es accesible dentro de la clase
    private $marcar;
    
    // es un atributo de tipo protected y sólo es accesible desde la misma clase y de clase hijas
    protected $hablar;
    
    // es un atributo public y es accesible desde cualquier lugar
    public $colgar;
    
    //constructor
    public function __construct(){
        //se puede acceder desde la clase a todos los atributos
        $this->marcar='0975555';
        $this->hablar='Conversando...';
        $this->colgar='Finalizar...';
    }
    
    //este es un método public y se lo puede llamar desde cualquier lugar
    public function mostrarAtributos(){
        echo $this->marcar.'<br>';
        echo $this->hablar.'<br>';
        echo $this->colgar;
    }
    
}


$telefono= new Telefono();

// esta sentencia es correcta, ya que $colgar es accesible desde cualquier lugar
$telefono->colgar='Adios....';
echo $telefono->colgar;

// incorrecto ya que $marcar es de tipo private y sólo es accesible desde la clase
// se debe comentar
// $telefono->marcar='09877655';
// echo $telefono->marcar;

// es invcorrecto, ya que $hablar es de tipo protected y sólo es accesible desde la clase y de clases hijas
// se debe comentar
// $telefono->hablar='Conversando...';
// echo $telefono->hablar;

// es correcto puesto que el método mostrarAtributos es de tipo public
$telefono->mostrarAtributos();
?>
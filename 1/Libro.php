<?php
class Libro{
    //propiedades o también conocidas como estado de la clase
    private $nombre;
    private $autor;
    
    //constructor de la clase
    public function __construct(){
        $this->autor='ecodeup';
    }
    //métodos o comportamiento
    public function imprimirDatosLibro (){
      echo $this->nombre;
    }
    
    public function nombreLibro(){
        $this->nombre='Curso básico de PHP';
    }
    
    public function imprimirAutor(){
        echo 'Autor: '.$this->autor;
    }
}
?>
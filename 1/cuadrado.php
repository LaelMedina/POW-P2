<?php
// Ejercicio1
class cuadrado {
    // Estos son ATRIBUTOS de los objetos
    var $num=10;
    
    // Este es el METODO para calcular
    function calcularCuadrado() {
        return ($this->num * $this->num);
    }
}
// Creamos el Objeto
$objeto = new cuadrado();

//Asignamos un atributo
$objeto->num = 3;
// Invocamos un método
echo $objeto->calcularCuadrado();

?>
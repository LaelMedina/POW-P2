<?php
class imagen {
    // Estos son ATRIBUTOS de los objetos
    var $src;
    var $border;

    // Esta función es el CONSTRUCTOR
    function imagen($src,$border) {
        $this->src=$src;
        $this->border=$border;
    }

    // Esta función es un METODO
    function Imprimir() {
        echo "<img src=";
        echo $this->src;
        echo "border=";
        echo $this->border;
        echo "/>";
    }
}
// Creamos el Objeto
$logo = new Imagen("imagen/msn2.jpg",8);

// Invocamos el método
$logo->Imprimir();
?>
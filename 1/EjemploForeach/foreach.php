<?php
echo "<h4>Recorrer propiedades de un Objeto</h4>";

// Precisa de los datos del archivo indicado
require_once("Persona4.php");

// Se crea una clase de la clase 'Persona4'
$objPersona = new Persona4();
$aPropiedades1 = get_class_vars("Persona4");
$aPropiedades2 = get_object_vars( $objPersona );
$aMetodos = get_class_methods("Persona4");
// También podría haberse usando 'get_class()' y el nombre de un Objeto:
// $aPropiedades1 = get_class_vars( get_class($objPersona) );
// $aMetodos = get_class_methods( get_class($objPersona) );

echo "<h3>PROPIEDADES 1:</h3>";
// Recorre todas la propiedades públicas de la clase
foreach( $aPropiedades1 as $nombre => $valor ){
     echo "<p>" . $nombre . ": [" . utf8_encode($valor) . "]<br/>";
}

echo "<h3>PROPIEDADES 2:</h3>";
// Recorre todas la propiedades públicas de la clase
foreach( $aPropiedades2 as $nombre => $valor ){
     echo "<p>" . $nombre . ": [" . utf8_encode($valor) . "]<br/>";
}

echo "<h3>PROPIEDADES (obtenidas desde la clase):</h3>";
// Recorre todas la propiedades

$objPersona->getPropiedades();
// Se devolverán TODAS las propiedades

echo utf8_encode("<h3>METODOS:</h3>");
// Recorre todos los métodos públicos o no clasificados
// No recorre las funciones 'protegidas' y 'privadas'

foreach( $aMetodos as $nombre => $valor ){
    echo "<p>" . $nombre . ": [" . utf8_encode($valor) . "]<br/>";
}

echo "</p>";
echo "<p>Finalizado</p>";
?>
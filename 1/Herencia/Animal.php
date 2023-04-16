<?php

/* HERENCIA EN PHP
Se la realiza con la palabra extends, seguido del nombre de la clase de la que se quiere
heredar, la herencia establece que la subclase hereda todos los atributos públicos y
protegidos de la clase padre.
Debemos tener en cuenta que la herencia solo trabaja en una dirección, la subclase o
clase hija hereda las características de su clase padre o superclase, pero la clase padre
no posee las características de la hija.
La herencia es la reutilización de código, puesto que puedo heredar de una clase
existente sin tener que codificar todo desde cero.
El término sobrescritura, hace que la clase hija pueda redefinir los métodos heredados de
su clase padre. */

class Animal{
    public function dormir(){
        echo 'Animal durmiendo..';
    }
    public function comer(){
        echo 'Animal comiendo';
    }
}

class Perro extends Animal{
    //metodo heredado de animal sobrescrito
    public function dormir(){
        echo 'Perro durmiendo..';
    }
}

$perro= new Perro();
//método heredado de animal
$perro->comer();
echo '<br>';
$perro->dormir();

?>
<?php

/* LOS MÉTODOS DE UN OBJETO
Un método sirve para que un objeto pueda acceder a sus atributos; también se utilizan
para realizar ciertas funcionalidades, ejemplo insertar registros en una base de datos, en
otros casos para algún tipo de cálculo.
La sintaxis con la que se declara un método es la siguiente:
    modificador_ de_acceso function nombre_metodo ($atributo1,$atributo2,…. ){
        cuerpo del método
    }
en algunos casos puede existir la sentencia return
 */

 class Libro{
    //propiedades o también conocidas como estado de la clase
    private $nombre;
    private $autor;
    //métodos geters y seters
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setAutor($autor){
        $this->autor=$autor;
    }
    
    public function getAutor(){
        return $this->autor;
    }
}

$libro = new Libro();

//asigno el nombre del libro a través del método setNombre()
$libro->setNombre('Curso de PHP');
    
//imprimo el nombre a través del método getNombre()
echo $libro->getNombre();
    
?>
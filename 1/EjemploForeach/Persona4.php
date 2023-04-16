<?php
class Persona4
{
    // Propiedades
    private $nombre = null;
    private $apellidos = null;
    public $provincia = null;
    public $pais = "Nicaragua";
    public $importe = 100;
    
    // Constantes:
    const PERSONA_HOMBRE = "HOMBRE";
    const PERSONA_MUJER = "MUJER";

    // Constructor vacío:
    function Persona4() {}
    
    // Métodos:
    function getNombre() {
        return $this->nombre;
    }
    
    function setNombre( $nombre ) {
        $this->nombre = $nombre;
    }
    
    // Función privada
    private function getPais() {
        return $this->pais;
    }
    
    // Función pública
    public function getPropiedades(){
        $aPropiedades1 = get_class_vars("Persona4");
        
        foreach( $aPropiedades1 as $nombre => $valor ){
            echo "<p>" . $nombre . ":
            [" . utf8_encode($valor) . "]<br/>";
        }
        echo "</p>";
    }
}// clase
?>
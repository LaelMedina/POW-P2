<?php 

class Persona{

    private string $nombre;
    private string $cedula;
    
    public function __construct($nombre = 'Vacio', $cedula='Vacio'){
        
        if(is_string($nombre)){
            $this->nombre = $nombre;
        }else{
            $this->nombre = 'Vacio';
        }

        if(is_string($cedula)){
            $this->cedula = $cedula;
        }else{
            $this->cedula = 'Vacio';
        }

    }

    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCedula() {
        return $this->cedula;
    }
    
    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getInfo(){
 
        echo "<span>Datos</span><br>";
        echo "Nombre: " . $this->nombre . "<br>"; 
        echo "Cedula: " . $this->cedula . "<br>";

    } 
}
?>
<?php 
    include('Persona.php'); //This already includes the class Persona, so it is not necessary to do it again in the main.

    class Profesor extends Persona{

        private string $especializacion;
        private array $asignaturas;
        
        public function __construct($nombre, $cedula, $especializacion = 'Vacio', $asignaturas)
        { 

            if(is_string($especializacion)){
                $this->especializacion = $especializacion;
            }else{
                $this->especializacion = 'Vacio';
            }

            if(empty($asignaturas)){
                $asignaturas = array('Vacio','Vacio','Vacio');
            }else{
                $this->asignaturas = $asignaturas;
            }

            parent::__construct($nombre, $cedula);
        }

        public function getEspecializacion(){
            return $this->especializacion;
        }

        public function setEspecializacion($especializacion){
            $this->especializacion = $especializacion;
        }

        
        public function getAsignaturas(){
            return $this->asignaturas;
        }

        public function setAsignaturas($asignaturas){
            $this->asignaturas = $asignaturas;
        }
        

        public function getInfo(){
            echo parent::getInfo();
            echo $this->especializacion . "<br>";
            
            echo "Asignaturas <br>";
            foreach($this->asignaturas as $asignatura){ //$this->asignaturas, this is important because the variable needs to be reached by the method.
                echo " -". "$asignatura" . "<br>";
            }
        }
    }

    
?>
<?php
    $datos = array(
        'Nombre' => 'Lael Medina',
        'Edad' => '20',
        'Sexo' => 'Masculino',
        'Nacionalidad' => 'Nicaraguense',
        'Carrera' => 'Ing. En Sistemas de Informacion'
    ); 

    foreach($datos as $propiedad => $valor){
        echo "$propiedad: $valor <br>" ;
    }
?>
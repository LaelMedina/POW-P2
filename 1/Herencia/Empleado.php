<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Empleado {
 
    private $nombre;
    private $sueldo;

    public function asigna($nom,$sue)
    {
        $this->nombre=$nom;
        $this->sueldo=$sue;
    }
    
    public function pagaImpuestos(){
        echo $this->nombre;
        echo '-';
        if ($this->sueldo>3000)
            echo 'Debe pagar impuestos';
        else
            echo 'No paga impuestos';
            echo '<br>';
    }
}

$empleado1=new Empleado();
$empleado1->asigna('Luis',2500);
$empleado1->pagaImpuestos();
$empleado1=new Empleado();
$empleado1->asigna('Carla',4300);
$empleado1->pagaImpuestos();
?>
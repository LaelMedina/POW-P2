<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<?php 
    include('Profesor.php');

    // $clases = array('Ingles','Programacion','Educacion Fisica');

    $profe1 = new Profesor(
        'Juan',
        '0101',
        'Programacion',
        // $clases
        // array('Ingles','Programacion','Educacion Fisica')
        array()
    );

    echo $profe1->getInfo(); 

    echo "<br>";

    $me = new Persona(0,0);

    echo $me->getInfo();
?>
    
</body>
</html>
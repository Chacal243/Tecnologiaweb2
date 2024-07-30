<?php

    // De 0 a 60 estratégico, 61 a 70 autónomo, 71 a 80 resolutivo, 81 a 90 receptivo, 91 a 100 pre formal

    $estudiantes = [
        ['Nombre' => 'Miguel', 'Nota' => 50, 'Estado' => 'estratégico'],
        ['Nombre' => 'Ana', 'Nota' => 68, 'Estado' => 'autónomo'],
        ['Nombre' => 'Carlos', 'Nota' => 75, 'Estado' => 'resolutivo'],
        ['Nombre' => 'Laura', 'Nota' => 88, 'Estado' => 'receptivo'],
        ['Nombre' => 'Diego', 'Nota' => 95, 'Estado' => 'pre formal'],
        ['Nombre' => 'Sofía', 'Nota' => 58, 'Estado' => 'estratégico'],
        ['Nombre' => 'Pedro', 'Nota' => 62, 'Estado' => 'autónomo'],
        ['Nombre' => 'María', 'Nota' => 70, 'Estado' => 'resolutivo'],
        ['Nombre' => 'Juan', 'Nota' => 82, 'Estado' => 'receptivo'],
        ['Nombre' => 'Luis', 'Nota' => 91, 'Estado' => 'pre formal'],
        ['Nombre' => 'Valeria', 'Nota' => 55, 'Estado' => 'estratégico'],
        ['Nombre' => 'Javier', 'Nota' => 67, 'Estado' => 'autónomo'],
        ['Nombre' => 'Paula', 'Nota' => 78, 'Estado' => 'resolutivo'],
        ['Nombre' => 'Andrés', 'Nota' => 83, 'Estado' => 'receptivo'],
        ['Nombre' => 'Carolina', 'Nota' => 92, 'Estado' => 'pre formal'],
        ['Nombre' => 'Alejandro', 'Nota' => 60, 'Estado' => 'estratégico'],
        ['Nombre' => 'Gabriela', 'Nota' => 71, 'Estado' => 'autónomo'],
        ['Nombre' => 'Roberto', 'Nota' => 77, 'Estado' => 'resolutivo'],
        ['Nombre' => 'Elena', 'Nota' => 89, 'Estado' => 'receptivo'],
        ['Nombre' => 'Daniel', 'Nota' => 93, 'Estado' => 'pre formal'],
    ];

    //Contar cuantos se encuentran en estado “Pre formal” mostrar mensaje necesita retroalimentación
    $Estado = array_column($estudiantes, 'Estado');
    $cont=0;
    
    foreach ($Estado as $a) {
        echo ($a === 'pre formal')? $cont++. " nesesita retroalimentación ".$a."<br>": $a."<br>";
    };

    echo "La cantidad de personas con estado pre formal son: ".$cont."<br>";

    //Calcular el promedio de los estudiantes con estado “estratégico”
    $promedio=0;
    $cont=0;
    foreach ($estudiantes as $key) {
        ($key['Estado']==="estratégico")?$cont++.$promedio+= $key['Nota']:"";
    }
    echo "El promedio de los estudiante con el estado estrategico es: ".$promedio=$promedio/$cont;


?>
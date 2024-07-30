<?php

    //while
    $inferior = $_GET['i'];
    $superior = $_GET['s'];
    $cont=0;
    while ($inferior <= $superior) {
        ($inferior % 7 == 0)?$cont++: " ";
        $inferior++;
    }
    echo "hay multiplos del 7: ".$cont;
    //do while
    $cont1=0;
    do {
        ($inferior % 7 == 0)?$cont1++: " ";
        $inferior++;
    } while ($inferior <= $superior);
    echo "hay multiplos del 7: ".$cont1;

// foreach
    $elecotrodomesticos=[
        [
            "nombre" => "Televisor",
            "precio" => 400,
            "estado" =>true
        ],
        [
            "nombre" => "Heladera",
            "precio" => 300,
            "estado" =>false
        ],
        [
            "nombre" => "Bicicleta",
            "precio" => 100,
            "estado" =>true
        ]
    ];
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";

    foreach ($elecotrodomesticos as $productos) {
        echo $productos['nombre']."<br>";
        echo $productos['precio']."<br>";
        echo ($productos['estado'])?"disponible"."<br>":"no disponible"."<br>";
    }

?>
<?php
    $Competencia = [
        ["Nombre"=> "maicol","hora" => 10],
        ["Nombre"=> "jose","hora" => 15],
        ["Nombre"=> "miguel","hora" => 20],
        ["Nombre"=> "nocolas","hora" => 50],
        ["Nombre"=> "giovanny","hora" => 30],
        ["Nombre"=> "sergio","hora" => 18],
        ["Nombre"=> "juan","hora" => 21],
        ["Nombre"=> "antonio","hora" => 32],
        ["Nombre"=> "guzi","hora" => 11],
        ["Nombre"=> "nocolai","hora" => 12]
    ];
    echo "<pre>";
    var_dump($Competencia);
    echo "</pre>";
    
    $horas = array_column($Competencia, 'hora');
    
    array_multisort($horas, SORT_ASC, $Competencia);
    
    echo "<pre>";
    var_dump($Competencia);
    echo "</pre>";

    echo "Ganador: ".$Competencia[0]['Nombre']. " Hora:". $Competencia[0]['hora']."<br>";   
    echo "Diferencia: ". $Competencia[0]['hora']-$Competencia[1]['hora']."<br>";
    echo "Ultimo: ".$Competencia[9]['Nombre']." Hora:". $Competencia[9]['hora'];   

    echo "<pre>";
        var_dump($Competencia[0]);
        var_dump($Competencia[1]);
        var_dump($Competencia[2]);
    echo "</pre>";

?>
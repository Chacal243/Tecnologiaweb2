<?php
    $productos = [
        'fecha'=>
        "2025-11-05",
        "2025-08-17",
        "2025-11-19",
        "2025-07-15",
        "2025-12-13",
        "2025-11-07",
        "2025-09-08",
        "2025-06-29",
        "2025-12-26",
        "2025-03-31",
        "2025-08-23",
        "2025-07-03",
        "2025-01-21",
        "2025-01-21",
        "2025-03-29",
        "2025-11-03",
        "2025-07-31",
        "2025-11-13",
        "2025-02-16",
        "2025-03-22"
    ];
    asort($productos);

    $actual = new DateTime();

    foreach ($productos as $tiempo) 
    {
        $mostrar=$actual -> diff(new DateTime($tiempo));
        echo ($mostrar->format('%R%a')>0)?"El producto vence en: ".$mostrar->format('%a días')."<br>":'';
    };

?>

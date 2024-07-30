<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N°4</title>
    <style>
        body {
            font-family: Century;
            background: #FCF3CF;
        }
    </style>
</head>
<body>
    <?php

    $vehiculos = [
        ['vehiculo' => 'Toyota', 'tiempo_espera' => 10],
        ['vehiculo' => 'Ford', 'tiempo_espera' => 15],
        ['vehiculo' => 'Honda', 'tiempo_espera' => 5],
        ['vehiculo' => 'Mercedes-Benz', 'tiempo_espera' => 20],
        ['vehiculo' => 'Chevrolet', 'tiempo_espera' => 12],
        ['vehiculo' => 'BMW', 'tiempo_espera' => 3],
        ['vehiculo' => 'Volvo', 'tiempo_espera' => 25],
        ['vehiculo' => 'Audi', 'tiempo_espera' => 18],
        ['vehiculo' => 'Ferrari', 'tiempo_espera' => 30],
        ['vehiculo' => 'Porsche', 'tiempo_espera' => 40],
        ['vehiculo' => 'Lamborghini', 'tiempo_espera' => 8],
        ['vehiculo' => 'Tesla', 'tiempo_espera' => 7],
        ['vehiculo' => 'Subaru', 'tiempo_espera' => 4],
        ['vehiculo' => 'Mazda', 'tiempo_espera' => 6],
        ['vehiculo' => 'Kia', 'tiempo_espera' => 22],
    ];

    $espera=$vehiculos[0];

        foreach ($vehiculos as $tiempo ) {
           $espera=($tiempo['tiempo_espera']>$espera['tiempo_espera'])? $tiempo:$espera;
        }
        echo " <h2>el tiempo mas largo es de: </h2>".$espera['vehiculo']." con ".$espera['tiempo_espera']."minutos";

        $promedio

    ?>
</body>
</html>
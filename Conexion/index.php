<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="build/css/app.css">
    <style>
        .tarjeta {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            width: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        .tarjeta img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body >
    <?php include("Cabecera.php")?>
    <?php require("includes/funciones.php") ?>
    <?php
    $datos = listar();
    $cont=0;
    foreach ($datos as $key => $value) {
        echo '<div class="tarjeta">
            <img src="src/img/img'.$cont.'.jpg" alt="Imagen de Juan Pérez">
            <h2>' .
            $value['nombre'] . ' ' . $value['apellido'] . 
            '</h2>
            <p>' .
            $value['telefono'] .
            '</p>
        </div>';
        $cont++;
    }
?>

    <?php include("pie.php")?>
</body>
</html>
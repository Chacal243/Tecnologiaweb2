<?php
function conectar(){
    $enlace = mysqli_connect("localhost", "root", "", "tecnologiaweb2");

    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo "Éxito: Se realizó una conexión apropiada a MySQL!";
    return $enlace;
}

?>
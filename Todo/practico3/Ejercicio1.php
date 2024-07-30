<?php
    if (isset($_POST['submit'])) {
        $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $descripcion=isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
        $archivo=isset($_POST['documento']) ? $_POST['documento'] : "";
        $caracteres=['!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|', '}', '~'];
        //en la cadena puede ir todo menos caracteres en el nombre del proyecto
        foreach ($caracteres as $key) {
            (strpos($nombre, $key))? 'se encontro un caracte <br>':  'nose encontro ningun caracter <br>';
        }
        //La descripción del proyecto debe tener un mínimo de 50 caracteres.
        echo (strlen($descripcion)>=50)? 'la cadena es mayor a 50 caracteres':'la cadena es menor a 50 caracteres';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="#" method="post">
        Nombre de Proyecto: <input type="text" name="nombre"><br>
        Descripción de Proyecto: <input type="text" name="descripcion"><br>
        Documento del Proyecto: <input type="file" name="documento"><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
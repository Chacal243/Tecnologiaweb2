<?php
if (isset($_POST['submit'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
    $error = [];
    
    if (empty($nombre)) {
        $error[0] = "El campo nombre no puede estar vacío";
    } elseif (strlen($nombre) >= 20) {
        $error[0] = "El campo nombre no puede tener más de 20 caracteres";
    }

    if (empty($apellido)) {
        $error[1] = "El campo apellido no puede estar vacío";
    } elseif (strlen($apellido) >= 20) {
        $error[1] = "El campo apellido no puede tener más de 20 caracteres";
    }

    if (empty($telefono)) {
        $error[2] = "El campo teléfono no puede estar vacío";
    } elseif (strlen((string)$telefono) != 11 ) {
        $error[2] = "El campo teléfono debe tener al menos 11 dígitos";
    }

    if (empty($error)) {
        require("includes/funciones.php");
        insertar($nombre,$apellido,$telefono);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de validación</title>
</head>
<body>
    <form action="#" method="post">
        Nombre: <input type="text" name="nombre">
        <?php if (isset($error[0])) echo $error[0]; ?><br>
        
        Apellido: <input type="text" name="apellido">
        <?php if (isset($error[1])) echo $error[1]; ?><br>
        
        Teléfono: <input type="text" name="telefono">
        <?php if (isset($error[2])) echo $error[2]; ?><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : "";
    $idioma = isset($_POST['idioma']) ? $_POST['idioma'] : "";
    $musica = isset($_POST['musica']) ? $_POST['musica'] : "";
    $pasatiempo = isset($_POST['pasatiempo']) ? $_POST['pasatiempo'] : [];

    $c = false;
    $caracteres = ["*", ".", "/", "@"];
    foreach ($caracteres as $key) {
        if (strpos($comentario, $key) !== false) {
            $c = true;
            break;
        }
    }

    $error = [];

    if (empty($nombre)) {
        $error[0] = '<p style="color: red;">Error: el campo nombre no puede estar vacío</p>';
    } elseif (strlen($nombre) < 3 || strlen($nombre) > 20) {
        $error[0] = '<p style="color: red;">Error: el campo nombre debe ser mayor a 3 y menor a 20</p>';
    }

    if (empty($apellido)) {
        $error[1] = '<p style="color: red;">Error: el campo apellido no puede estar vacío</p>';
    } elseif (strlen($apellido) < 3 || strlen($apellido) > 20) {
        $error[1] = '<p style="color: red;">Error: el campo apellido debe ser mayor a 3 y menor a 20</p>';
    }

    if (empty($correo)) {
        $error[2] = '<p style="color: red;">Error: el campo correo no puede estar vacío</p>';
    }

    if (empty($comentario)) {
        $error[3] = '<p style="color: red;">Error: el campo comentario no puede estar vacío</p>';
    } elseif ($c) {
        $error[3] = '<p style="color: red;">Error: el campo comentario contiene caracteres no permitidos</p>';
    } elseif (strlen($comentario) > 50) {
        $error[3] = '<p style="color: red;">Error: el campo comentario debe contener menos de 50 caracteres</p>';
    }

    if (empty($idioma)) {
        $error[4] = '<p style="color: red;">Error: el campo idioma no puede estar vacío</p>';
    }

    if (empty($musica)) {
        $error[5] = '<p style="color: red;">Error: el campo música no puede estar vacío</p>';
    }

    if (count($pasatiempo) == 0) {
        $error[6] = '<p style="color: red;">Error: el campo pasatiempo no puede estar vacío</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            padding-right: 20px;
            background: url("arrow-down.png") no-repeat right center;
        }
        .red-border {
            border: 2px solid red;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <label for="nombre">Nombre:</label>
        <?php echo isset($error[0]) ? "<input style='border: 2px solid red;' type='text' name='nombre'>" : "<input type='text' name='nombre'>";?>
        <?php if (isset($error[0])) echo $error[0]; ?>
        <br>
        <label for="apellido">Apellido:</label>
        <?php echo isset($error[1]) ? "<input style='border: 2px solid red;' type='text' name='apellido'>" : "<input type='text' name='apellido'>";?>
        <?php if (isset($error[1])) echo $error[1]; ?>
        <br>
        <label for="correo">Correo:</label>
        <?php echo isset($error[2]) ? "<input style='border: 2px solid red;' type='text' name='correo'>" : "<input type='text' name='correo'>";?>
        <?php if (isset($error[2])) echo $error[2]; ?>
        <br>
        <label for="comentario">Comentario:</label>
        <?php echo isset($error[3]) ? '<textarea style="border: 2px solid red;" name="comentario"></textarea>' : '<textarea name="comentario"></textarea>';?>
        <?php if (isset($error[3])) echo $error[3]; ?>
        <br>
        <label for="idioma">Seleccione idioma:</label>
        <select name="idioma">
            <option value="">Seleccione idioma</option>
            <option value="Español">Español</option>
            <option value="Inglés">Inglés</option>
            <option value="Francés">Francés</option>
            <option value="Portugués">Portugués</option>
        </select>
        <?php if (isset($error[4])) echo $error[4]; ?>
        <br>
        <label>Música:</label>
        <input type="radio" name="musica" value="rock"> Rock <br>
        <input type="radio" name="musica" value="clasico"> Clásico <br>
        <input type="radio" name="musica" value="tradicional"> Tradicional <br>
        <?php if (isset($error[5])) echo $error[5]; ?>
        <br>
        <label>Pasatiempo:</label>
        <input type="checkbox" name="pasatiempo[]" value="jugar"> Jugar <br>
        <input type="checkbox" name="pasatiempo[]" value="cantar"> Cantar <br>
        <input type="checkbox" name="pasatiempo[]" value="estudiar"> Estudiar <br>
        <?php if (isset($error[6])) echo $error[6]; ?>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <!-- crear las opciones 
    cuantas opciones idiomas, musica y pasatiempo todo en php
    -->
</body>
</html>
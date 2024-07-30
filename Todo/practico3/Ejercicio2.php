<?php
if (isset($_POST['submit'])) {
    $errors = [];

    // Función para validar solo letras y espacios
    function validarTexto($campo) {
        return preg_match("/^[a-zA-Z\s]+$/", $campo);
    }

    // Validaciones individuales
    $campos = ['Segmento', 'Manzana', 'Predio', 'Vivienda', 'Ciudad', 'Calle', 'puerta', 'planta', 'Depto', 'edificio', 'bloque'];
    
    foreach ($campos as $campo) {
        if (!isset($_POST[$campo]) || !validarTexto($_POST[$campo])) {
            $errors[$campo] = "El campo $campo solo puede contener letras y espacios.";
        } elseif (strlen($_POST[$campo]) > 50) {
            $errors[$campo] = "El campo $campo no puede exceder los 50 caracteres.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ubicación de la Vivienda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1, h2 {
            color: #333;
        }
        p {
            margin-bottom: 15px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <h1>Capítulo A: Ubicación de la Vivienda</h1><br>
        <h2>Copie del Mapa</h2>
        <p>
            1. Segmento: <input type="text" name="Segmento">
            <?php if (isset($errors['Segmento'])) { echo "<br>"."<span class='error'>{$errors['Segmento']}</span>"; } ?>
        </p>
        <p>
            2. Manzana: <input type="text" name="Manzana">
            <?php if (isset($errors['Manzana'])) { echo "<br>"."<span class='error'>{$errors['Manzana']}</span>"; } ?>
        </p>
        <p>
            3. Nro de predio: <input type="text" name="Predio">
            <?php if (isset($errors['Predio'])) { echo "<br>"."<span class='error'>{$errors['Predio']}</span>"; } ?>
        </p>
        <h2>Registre el predio</h2>
        <p>
            4. Total de viviendas en el predio: <input type="text" name="Predio">
            <?php if (isset($errors['Predio'])) { echo "<br>"."<span class='error'>{$errors['Predio']}</span>"; } ?>
        </p>
        <p>
            5. Nro de vivienda: <input type="text" name="Vivienda">
            <?php if (isset($errors['Vivienda'])) { echo "<br>"."<span class='error'>{$errors['Vivienda']}</span>"; } ?>
        </p>
        <h2>Complete según corresponda</h2>
        <p>
            6. Ciudad o comunidad: <input type="text" name="Ciudad">
            <?php if (isset($errors['Ciudad'])) { echo "<br>"."<span class='error'>{$errors['Ciudad']}</span>"; } ?>
        </p>
        <p>
            7. Calle, avenida, camino o carretera: <input type="text" name="Calle">
            <?php if (isset($errors['Calle'])) { echo "<br>"."<span class='error'>{$errors['Calle']}</span>"; } ?>
        </p>
        <p>
            8. Número de puerta: <input type="text" name="puerta">
            <?php if (isset($errors['puerta'])) { echo "<br>"."<span class='error'>{$errors['puerta']}</span>"; } ?><br>
        </p>
        <p>
            9. Planta, piso o nivel: <input type="text" name="planta">
            <?php if (isset($errors['planta'])) { echo "<br>"."<span class='error'>{$errors['planta']}</span>"; } ?>
        </p>
        <p>
            10. Nro. Depto: <input type="text" name="Depto">
            <?php if (isset($errors['Depto'])) { echo "<br>"."<span class='error'>{$errors['Depto']}</span>"; } ?>
        </p>
        <p>
            11. Nombre del edificio: <input type="text" name="edificio">
            <?php if (isset($errors['edificio'])) { echo "<br>"."<span class='error'>{$errors['edificio']}</span>"; } ?>
        </p>
        <p>
            12. Bloque: <input type="text" name="bloque">
            <?php if (isset($errors['bloque'])) { echo "<br>"."<span class='error'>{$errors['bloque']}</span>"; } ?><br>
        </p>
        <h1>Capitulo B: Tipo de vivienda</h1>
        <h2>La vivienda es:</h2>
        <h3>A: Vivienda particular:</h3>
        <p>
            <label for="Vivienda_particular">Vivienda_particular</label><br>
            <select name="Vivienda_particular">
                <option value="">Seleccione</option>
                <option value="1Casa">Casa</option>
                <option value="1Choza">Choza</option>
                <option value="1Departamento">Departamento</option>
                <option value="1Cuarto">Cuarto o habitaciones</option>
                <option value="1Vivienda">Vivienda Improvisadao o Vivienda movil</option>
                <option value="1Establecimiento">Establecimiento no destinado para vivienda</option>
            </select>
            <br><label for="Vivienda colectiva">Vivienda colectiva</label><br>
            <select name="Vivienda colectiva" colectiva>
                <option value="">Selecione</option>
                <option value="Hotel">Hotel, hospital, residencia o alojamiento</option>
                <option value="Hospital">Hospital o clinica con internacion</option>
                <option value="Cuartel">Cuartel o establecimiento militar o policial</option>
                <option value="Residencia">Residencia u otro de adultos mayores</option>
                <option value="Albergue">Albergue de niños(a) y adolecentes</option>
                <option value="Recinto">Recinto penitenciario o de reintegracion</option>
                <option value="campamento">Campamento de trabajo</option>
                <option value="otro">Otra(instituto de rehabilitacion,convento)</option>
            </select>
            <br><label for="Sin vivienda">Sin vivienda</label><br>
            <select name="Sin vivienda">
                <option value="calle">Persona que vive en la calle</option>
                <option value="transito">En transito: terminal, aeropuerto, otro</option>
            </select>
            <h2>La vivienda esta:</h2>
            <h3>A Ocupada</h3>
            <br><label for="Ocupado">Ocupado</label><br>
            <select name="ocupado">
                <option value="personas">Con personas presentes</option>
                <option value="ausentes">Con personas temporalmente ausentes</option>
            </select>
            <br><label for="Desocupado">Desocupado</label><br>
            <select name="Desocupado">
                <option value="alquilar">Para alquilar i/o vender</option>
                <option value="Terminandose">Terminandose de contruir y reparar</option>
                <option value="Abandonado">Abandonado</option>
            </select>
        </p>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>

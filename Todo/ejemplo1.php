<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5dc;
        }
        .card {
            background: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border-radius: 10px;
            text-align: left;

        }
        h1 {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php
        $nombre = 'Giovanny';
        $apellido = 'Coronel Flores';
        $Carrera = 'Ing. en sistemas';
        $Equipo = 'Portugal';
    ?>

    <div class="card">
        <h3>Nombre: <?php echo $nombre; ?></h3>
        <h3>Apellido: <?php echo $apellido; ?></h3>
        <h3>Carrera: <?php echo $Carrera; ?></h3>
        <h3>Equipo: <?php echo $Equipo; ?></h3>
    </div>
</body>
</html>

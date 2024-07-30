<?php
        session_start(); 
        $errores = isset($_SESSION['errores']) ? $_SESSION['errores'] : [];
        $datos = isset($_SESSION['datos']) ? $_SESSION['datos'] : [];
        unset($_SESSION['errores']);
        unset($_SESSION['datos']);
        $campos = [
            "nombre" => "Nombre",
            "apellido" => "Apellido",
            "carrera" => "Carrera",
        ];
        function Validar($entrada, $nombre, $nombre_campo) 
        {
            global $errores, $datos;
            if (empty($entrada)) 
            {
                $errores[$nombre] = "El campo <strong>$nombre_campo</strong> es obligatorio";
            } 
            else 
            {
                $datos[$nombre] = $entrada;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            foreach ($campos as $campo => $nombre_campo) 
            {
                Validar($_POST[$campo] ?? '', $campo, $nombre_campo);
            }
            if (empty($errores)) 
            {
                $contenido_archivo = "";
                foreach ($datos as $clave => $valor) 
                {
                    $contenido_archivo .= $campos[$clave] .": ".$valor."\n";
                }
                $fecha = date("Ymd_His");
                $nombre_archivo = 'prueba/estudiante-datos'.$fecha.'.txt';
                if (!file_exists('prueba')) 
                {
                    mkdir('prueba', 0777, true);
                }
                file_put_contents($nombre_archivo, $contenido_archivo);
                $_SESSION['mensaje'] = "Enviado";
                $_SESSION['url'] = $nombre_archivo;
                header("Location: mostrar.php");
                exit();
            } 
            else 
            {
                $_SESSION['errores'] = $errores;
                $_SESSION['datos'] = $_POST;
                header("Location: puntos.php");
                exit();
            }
        }
    ?>    
        <div class="card">
            <form enctype="multipart/form-data" action="" method="POST">
                <div>
                    <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($datos['nombre'] ?? '') ?>" required>
                        <?php if (isset($errores['nombre'])): ?><div class="error"><?= $errores['nombre'] ?></div><?php endif; ?>
                    <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" value="<?= htmlspecialchars($datos['apellido'] ?? '') ?>" required>
                        <?php if (isset($errores['apellido'])): ?><div class="error"><?= $errores['apellido'] ?></div><?php endif; ?>
                    <label for="carrera">Carrera:</label>
                        <input type="text" id="carrera" name="carrera" value="<?= htmlspecialchars($datos['carrera'] ?? '') ?>" required>
                        <?php if (isset($errores['carrera'])): ?><div class="error"><?= $errores['carrera'] ?></div><?php endif; ?>
                </div>   
                <input type="submit" value="Enviar"/>
            </form>
        </div>
    </div>
</body>
</html>
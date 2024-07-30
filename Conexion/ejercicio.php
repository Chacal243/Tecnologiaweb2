<?php
if (isset($_POST['nombre'])) {
    $nombre="galleta";
    $valor=$_POST['nombre']."|".$_POST['password'] ;
    $fecha=time() + (60 * 60 * 24);
    setcookie($nombre,$valor,$fecha);
}
else{
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <?php 
            if (isset($_COOKIE['galleta'])) {
                $datos=$_COOKIE['galleta'];
                $datos_array=explode("|",$datos);
                $usuario=$datos_array[0];
                $contrasena=$datos_array[1];
                $recordar="on";
                echo $usuario;
                echo $contrasena;
            };
            ?>
        </p>
        Nombre: <input type="text" name="nombre">
        Password: <input type="text" name="password" value="<?php echo ($recordar=='on')?$contrasena:''?>">
        Recordar <input type="checkbox" name="recordar"
        <?php
        if ($recordar=="on")echo 'cheked';
        ?>>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php
    $nombre=isset($_POST['nombre'])?$_POST['nombre']:"";
    $apellido=isset($_POST['apellido'])?$_POST['apellido']:"";
    $correo=isset($_POST['correo'])?$_POST['correo']:"";
    $comentario=isset($_POST['comentario'])?$_POST['comentario']:"";
    $idioma=isset($_POST['idioma'])?$_POST['idioma']:[];
    $musica=isset($_POST['musica'])?$_POST['musica']:[];
    $pasatiempo=isset($_POST['pasatiempo'])?$_POST['pasatiempo']:[];

    $c=-1;
    $caracter=["*",".","/","@"];
    foreach ($caracter as $key) {
        $verificar=strpos($comentario,$key);
        ($verificar==true)?$c++:"";
    }
    if (empty($nombre)) {
        echo '<p style="color: red;">Error: el campo nombre no puede estar vacío</p>';
    }
    elseif (strlen($nombre)<3 || strlen($nombre)>20){
        echo '<p style="color: red;">Error: el campo nombre debe ser mayor a 3 y menor a 20</p>';
    }
    if (empty($apellido)) {
        echo '<p style="color: red;">Error: el campo apellido no puede estar vacío</p>';
    }
    elseif (strlen($apellido)<3 || strlen($apellido)>20){
        echo '<p style="color: red;">Error: el campo apellido debe ser mayor a 3 y menor a 20</p>';
    }
    if (empty($correo)) {
        echo '<p style="color: red;">Error: el campo correo no puede estar vacío</p>';
    }
    if (empty($comentario) ) {
        echo '<p style="color: red;">Error: el campo comentario no puede estar vacío</p>';
    }
    elseif ($c>=0) {
        echo '<p style="color: red;">Error: el campo comentario contiene caracteres</p>';
    }
    elseif (strlen($comentario)<=50) {
        echo '<p style="color: red;">Error: el campo comentario debe contener menos de 50 caracteres</p>';
    }
    if (empty($musica)) {
        echo '<p style="color: red;">Error: el campo música no puede estar vacío</p>';
    }
    if (empty($pasatiempo)) {
        echo '<p style="color: red;">Error: el campo pasatiempo no puede estar vacío</p>';
    }
    else {
        echo 
        "Nombre: ".$nombre."<br>".
        "Apellido: ".$apellido."<br>".
        "Correo: ".$correo."<br>".
        "Comentario: ".$comentario."<br>".
        "Musica: ".$musica."<br>";
        foreach ($pasatiempo as $key ) {
            echo "Pasatiempo: ".$key."<br> ";
        };
    }


// los errores con rojo
// los comentariops no deben ser mayor a 50 
//el nombre y apellido debe ser mayor a 3 y menor a 20
//el comentario no debe contener caracteres (*,.,/,@)
?>
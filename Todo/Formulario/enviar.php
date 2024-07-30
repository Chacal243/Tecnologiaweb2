<?php
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    echo (strlen($usuario)>=10)?"Usuario Bienvenido ".$usuario."<br>":"El usuario debe contener 10 digitos"."<br>";

    $numeros=["0","1","2","3","4","5"];
    $c=-1;
    foreach ($numeros as $key) {
        $verificar=strpos($password,$key);
        ($verificar==true)?$c++:"";
    }
    echo ($c>=0)?"contraseña correcta"."<br>":"Error en la contraseña"."<br>";
?>
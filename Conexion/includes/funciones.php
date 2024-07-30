<?php
    require("conexion.php");
    $conexion=conectar();

    function insertar($nombre,$apellido,$telefono){
        global $conexion;
        $sql= "insert into usuario (nombre,apellido,telefono) values ('".$nombre."','".$apellido."','".$telefono."')";
        mysqli_query($conexion,$sql);
    }

    function listar() {
        global $conexion;
        $sql = "SELECT * FROM usuario";
        $r = mysqli_query($conexion, $sql);
        
        $datos = [];
        while ($fila = mysqli_fetch_assoc($r)) {
            $datos[] = $fila;
        }
        
        return $datos;
    }
?>
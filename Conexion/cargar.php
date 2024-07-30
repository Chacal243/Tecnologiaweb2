<?php
require ("includes/conexion.php");
    $conexion=conectar();
    $archivo=fopen("datos.csv","r");
    $i=0;
    $bandera=true;
    while (!feof($archivo)) {
        $datos=fgetcsv($archivo);
        if ($bandera) {
            $bandera=false;
            continue;
        }
        $sql="insert into preguntas (descripcion,nombre,pais,acierto,estado) values ('".$datos[1]."','".$datos[2]."','".$datos[3]."',
        '".$datos[4]."','".$datos[5]."')";
        $r=mysqli_query($conexion,$sql);
        echo ($r)?"inserto correctamente":"Error al insertar";
        $i++;
    }
    fclose($archivo);

<?php
    //funcion para genera los datos
    $opciones = ["me gusta", "comentarios", "compartir"];
    $Estados=[];

    for ($i = 0; $i < 50; $i++) {
        $Estados[] = $opciones[array_rand($opciones)];
    }
    echo "<pre>";
    var_dump($Estados);
    echo "</pre>";

    // contador
    $megusta=0;
    $comentario=0;
    $compartido=0;
    foreach ($Estados as $limite) 
    {
        ("me gusta" == $limite)?$megusta++:
        (("comentarios" == $limite)? $comentario++:
        (("compartir" == $limite)? $compartido++:""));
    };

    echo $megusta."<br>".$comentario."<br>".$compartido."<br>";
    // estado mas utilizado
    echo ($megusta>=$comentario & $megusta>=$compartido & $megusta==$comentario)?"los estados mas utilizados son el me gusta y el comentario":
    (($megusta>=$compartido & $megusta>=$comentario & $megusta==$compartido)?"los estados mas utilizados son el me gusta y el compartido":
    (($comentario>=$compartido & $comentario==$compartido & $comentario>=$megusta)?"los estados mas utilizados son el comentario y el compartido":
    (($megusta>=$comentario & $megusta>=$compartido)? "El estado mas utilizado es me gusta":
    (($comentario>=$megusta & $comentario>=$compartido)?"El estado mas utilizado es comentario":
    (($compartido>=$megusta & $compartido>=$comentario)?"El estado mas utilizado es compartido":"nop")))));

    //promedio
    echo "<br>";
    echo "el promedio de me gusta es %". ($megusta/50)*100;
    echo "<br>";
    echo "el promedio de comentario es %". ($comentario/50)*100;
    echo "<br>";
    echo "el promedio de compartido es %". ($compartido/50)*100;
    echo "<br>";

    // estado me nos utilizado
    echo ($megusta<=$comentario & $megusta<=$compartido & $megusta==$comentario)?"los estados menos utilizados son el me gusta y el comentario":
    (($megusta<=$compartido & $megusta<=$comentario & $megusta==$compartido)?"los estados menos utilizados son el me gusta y el compartido":
    (($comentario<=$compartido & $comentario==$compartido & $comentario<=$megusta)?"los estados menos utilizados son el comentario y el compartido":
    (($megusta<=$comentario & $megusta<=$compartido)? "El estado menos utilizado es me gusta":
    (($comentario<=$megusta & $comentario<=$compartido)?"El estado menos utilizado es comentario":
    (($compartido<=$megusta & $compartido<=$comentario)?"El estado menos utilizado es compartido":"nop")))));
?>

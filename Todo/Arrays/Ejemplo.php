<?php
// Declara arrays formas
    $platos = array ("saice","sopa","pescado");
    $platos = ["saice", "sopa", "chancho"];
    var_dump($platos);
// PARA MOSTRAR 
    echo "<pre>";
    var_dump($platos);
    echo "</pre>";

    // insertar datos
    $platos[2]= "nuevo plato";
    $platos[3]= "chancho";
    echo "<pre>";
    var_dump($platos);
    echo "</pre>";

    //insertar al inciio
    array_unshift($platos, "jugos");
    echo "<pre>";
    var_dump($platos);
    echo "</pre>";
    //insertar al final
    array_push($platos, "mango");
    echo "<pre>";
    var_dump($platos);
    echo "</pre>";

    //array de dos dimenciones
    $elecotrodomesticos=array(
        "nombre"=> "televisor",
        "modelo"=> "LG",
        "Precio"=> 450,
        "pulgadas"=>16,
        "procedencia"=>"china",
        "acesorios"=>array(
            "game"=>"si",
            "smart"=>"no",
            "control"=>"si"
        )
        );
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";
    // agregar usb al array
    echo $elecotrodomesticos['nombre']."<br>".
    $elecotrodomesticos['Precio']."<br>".
    $elecotrodomesticos['acesorios']['smart'];
    $elecotrodomesticos['acesorios']["usb"]="si";
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";

    //manejar los indices si o no si estan vacios o nel
    // empty pregunta si esta vacio
    var_dump(empty($platos));
    var_dump(empty($elecotrodomesticos));
    $clientes=[];
    var_dump(empty($clientes));
    // isset pregunta si esta declarado
    var_dump(isset($clientes));
    var_dump(isset($elecotrodomesticos['procedencia']));

    // ordenas de menor a mayor
    sort($platos);
    echo "<pre>";
    var_dump($platos);
    echo "</pre>";
    // ordenar de mayor a menor
    rsort($platos);
    echo "<pre>";
    var_dump($platos);
    echo "</pre>";
    //ordenar array de 2 dimensiones valores de acuerdo al orden alfabetico de forma ascendente es por el valor
    asort($elecotrodomesticos);
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";
    //ordenar array de 2 dimensiones valores de acuerdo al orden alfabetico de forma decendente es por el valor
    arsort($elecotrodomesticos);
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";
    //ordenar array de 2 dimensiones indices de acuerdo al orden alfabetico de forma ascendente 
    ksort($elecotrodomesticos);
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";
    //ordenar array de 2 dimensiones indices valores de acuerdo al orden alfabetico de forma desendente 
    krsort($elecotrodomesticos);
    echo "<pre>";
    var_dump($elecotrodomesticos);
    echo "</pre>";
?>
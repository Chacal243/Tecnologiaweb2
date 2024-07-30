<?php
    // creacion de variables con $
    $cliente="Juan perez";
    print(strlen($cliente));
    echo "<br>";
    // Esta función muestra información estructurada sobre uno o más expresiones que incluyen su tipo y valor.
    var_dump($cliente);
    // limpiar espacios en blanco
    $texto = " Jose lopez ";
    var_dump($texto);
    // trim borra los espacios del inicio y final no del medio
    $texto2=strlen(trim($texto));
    echo $texto2."<br>";
    //convertir minuscilas y mayusculas
    echo (strtolower($cliente))."<br>";
    echo (strtoupper($texto))."<br>";
    // comparaciones de tamaño
    var_dump($cliente==$texto);
    var_dump(strtolower($cliente)===strtolower($texto))."<br>";
    //remplazar
    echo "<br>";
    echo str_replace("Juan","jose",$cliente);   
    //buscar posicion
    echo ("<br>");
    echo strpos($cliente,"perez")."<br>";
    //Buscar cosillas con substr_
    //count cuantas veses se repite
    echo substr_count($cliente,"e");
    //dividir cadena
    $cadena = explode ("e",$texto);
    var_dump($cadena)."<br>";
    //unir cadena
    echo "<br>";
    $cadena = implode ("e",$cadena);
    var_dump($cadena);





































?>

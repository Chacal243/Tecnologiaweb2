<?php
    $archivo="preba.txt";
    echo (touch($archivo))?"El archivo existe":"El archivo no existe";
    echo "<br>";
    // var_dump($datos);
    if (touch($archivo)) {
        $datos = fopen($archivo,"w");
        // a para escribir contuanado w para sobre escribir 
        fwrite($datos,"Hoy es lunes\n");
        fclose($datos);
    
    $datos = fopen($archivo,"r");
    while (!feof($datos)) {
        $linea=fgets($datos,1024);
        echo $linea."<br>";
    }
    fclose($datos); 
    }
    else{
        echo "error";
    }
    
?>
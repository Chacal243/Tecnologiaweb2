<?php

    $nombre = $_GET["nombre"];
    $monto = $_GET["monto"];
    $edad = $_GET["edad"];
    $iva=$_GET["iva"];
    $monto_iva=0;
    function ConIva(int $monto):float
    {
        $monto_iva = $monto+($monto*0.13);
        return $monto_iva;
    };
    function SinIva(int $monto):float
    {
        $monto_iva = ($monto)-($monto*0.13);
        return $monto_iva;
    };
    
    // echo "edad".($edad>=18)?"puedes realizar la compra":"no puedes realizar la compra";
    //tipo de error si hay te mostrara
    try {echo "edad".($edad>=18)?"puedes realizar la compra":"no puedes realizar la compra";
        echo "resultado es ".($iva==="true")?(ConIva($monto)):(SinIva($monto));
    } catch (TypeError $e) {
        echo "Error ".$e->getMessage();
    };

    /////segundo array
    //array de notas y calcular el promedio de 10 estudiantes

   function promedio (int|float ...$notas)
   {

    $suma=0;
    $promedio=0;
    foreach($notas as $nota){
        $suma+=$nota;
        
    }
    return $promedio=$suma/count($notas);
    // yield $suma;
    // yield $nota;

   };

   echo "el promedio de notas es: ".promedio(45.8,56.5,34.8,2.9,69.9);


?>

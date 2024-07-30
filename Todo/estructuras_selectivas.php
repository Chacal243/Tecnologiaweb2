
<?php
// forma de condicionales
    $puntos=0;
    $compra=$_GET['c'];
    if($compra>50 & $compra<=100){
        $puntos+=5;
    }
    elseif ($compra > 100 & $compra <= 200) {
        $puntos+=15;
    }
    elseif ($compra > 200 & $compra <= 500) {
        $puntos+=30;

    }
    elseif ($compra > 500) {
        $puntos+=60;
    }
    else {
    };
    echo "Resive ".$puntos;
// version ternaria
    $puntos1 = 0;

    $puntos1 += ($compra > 50 && $compra <= 100) ? 5 : 
              (($compra > 100 && $compra <= 200) ? 15 : 
              (($compra > 200 && $compra <= 500) ? 30 : 
              (($compra > 500) ? 60 : 0)));
    echo "Resive ".$puntos1;
// switch version
    switch ($compra) {
        case $compra > 50 && $compra <= 100:
            $puntos+=5;
            break;
        case $compra > 100 & $compra <= 200:
            $puntos+=15;
            break;
        case $compra > 200 & $compra <= 500:
            $puntos+=30; 
            break;
        case $compra > 500:
            $puntos+=60;  
            break;
        default:
            break;
    }
    echo "Resive ".$puntos;

?>

<?php
    $dimension=$_GET['lados']; 
    
    for ($i = 1; $i <= $dimension; $i++) {
        for ($j = 0; $j < $dimension - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $i; $k++) {
            echo "* ";
        }
        echo "<br>";
    }
?>
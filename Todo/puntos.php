<?php
$dimension=$_GET['lados']; 
for ($i=0; $i <= $dimension; $i++) { 
    for ($i1=0; $i1 <= $i; $i1++) { 
        echo " "."<br>";
    };
    for ($i2=0; $i2 <= $i; $i2++) { 
        echo "*";
    };

}
?>
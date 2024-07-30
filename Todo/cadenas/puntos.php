<?php

$usuario = "Giovanny Coronel Flores";
$contraseña = "R4id_3000";
$Confirmar = "R4id_3000";

echo (var_dump($contraseña===$Confirmar));
echo "<br>";
echo (var_dump($usuario));

echo "<br>";
$division=explode(" ",$usuario);
var_dump($division);

echo substr_count($division[0],"n")."<br>";
echo substr_count($division[1],"n")."<br>";
echo substr_count($division[2],"n")."<br>";

?>
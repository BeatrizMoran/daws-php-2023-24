<?php

$notas = [
    "Amaia" => 6.5,
    "Ane" => 7.5,
    "Maite" => 5.2,
    "Lorea" => 9.1,
    "Markel" => 6.8,
    "Urtzi " => 8.4
];

$cadena = "";
foreach($notas as $n => $value){
    $cadena = $cadena . "La nota media de " . $n . " es ". $value .  "<br>";
}

include "index.view.php";
?>

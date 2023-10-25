<?php

$array = [];
for ($i=0; $i < 21 ; $i++) { 
    $n = random_int(1,999);
    array_push($array, $n);
}

$cadena = "";
foreach($array as $num){
    $cadena = $cadena . $num . " , ";
}

$max = max($array);
$min = min($array);



include "index.view.php";


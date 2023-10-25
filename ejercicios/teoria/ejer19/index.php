<?php

function sumar($n){
    $suma = 0;
    for ($i=0; $i <= $n ; $i++) { 
        $suma = $suma + $i;
    }
    return $suma;
}

$resultado = sumar(2);

include "index.view.php";

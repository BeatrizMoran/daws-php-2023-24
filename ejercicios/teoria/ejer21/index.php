<?php

function sumar($n){
    $suma = 0;
    for ($i=0; $i <= $n ; $i++) { 
        if($i%2 === 0)
            $suma = $suma + $i;
        elseif($suma > 100){
            return $suma;
        }
    }
    return $suma;
}

$resultado = sumar(300);

include "index.view.php";

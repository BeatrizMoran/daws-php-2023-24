<?php

function sumar($n){
    $suma = 0;
    for ($i=0; $i <= $n ; $i++) { 
        if($i%2 === 0)
            $suma = $suma + $i;
        elseif($suma > 100){
            
        }
    }
    return $suma;
}

$resultado = sumar(10);

include "index.view.php";

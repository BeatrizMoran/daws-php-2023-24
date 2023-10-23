<?php

 $paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

$pais = "Vi";

function buscar($pais, $paises){
    $posicion =  array_search($pais, $paises)+1;
    if($posicion !== false){
        return $posicion;
    }
    else{
        return -1;
    }

}

$n = buscar($pais, $paises);


include "index.view.php";

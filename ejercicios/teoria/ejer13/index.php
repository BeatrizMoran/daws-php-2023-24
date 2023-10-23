<?php

$animales = ["perro", "gato", "conejo", "uron"];
$colores = ["blanco", "negro", "gris", "naranja"];


$valor = "leon";
$c = "negro";

function insertarFinal($animales, $valor){
    array_push($animales, $valor);
    print_r($animales);
}

function insertarPrincipio($colores, $c){
    array_unshift($colores, $c);
    print_r($colores);
}

function combinarArrays($animales, $colores){
    $completo = array_merge($animales, $colores);

print_r($completo);

}
   require "index-view.php";

  
?>
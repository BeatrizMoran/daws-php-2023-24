<?php

$ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];


$n = 2;
$valor = "Vitoria";
   function getValor($ciudades, $n){
    return  $ciudades[$n-1] . " , ";
   }

   function setValor($ciudades, $n, $valor){
    array_splice($ciudades, $n-1, 0, $valor );
    return $ciudades;
   }

   require "index-view.php";

  
?>
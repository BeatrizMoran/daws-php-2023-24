<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];

function operacion($n1, $n2){
    if($n1 !== $n2){
        return $n1+$n2;
    }
    else{
        return $n1*$n2;

    }
}

$resultado = operacion($n1, $n2);


    require "index.view.php";





  
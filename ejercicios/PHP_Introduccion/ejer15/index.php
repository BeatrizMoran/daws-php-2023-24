<?php

$diccionario = array(
    "Bea" => array (
        "apellidos" => "moran",
        "email" => "bea@gmail.com"
    ),
    "Pepe" => array(
        "apellidos" => "garcia",
        "email" => "pepe@gmail.com"
    )
    );


global $valor;

    function getDatos($diccionario, $nombre, $dato){
         return $diccionario[$nombre][$dato];
    }

$valor = getDatos($diccionario, "Bea", "email");


    include "index.view.php";





  
?>
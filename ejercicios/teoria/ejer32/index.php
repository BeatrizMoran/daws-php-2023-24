<?php
$agenda = [
    [
        "nombre" => "Luis Scola",
        "nota1" => 9,
        "nota2" => 8,
    ],
    [
        "nombre" => "Pablo Prigioni",
        "nota1" => 4,
        "nota2" => 6,
    ],
    [
        "nombre" => "Sergi Vidal",
        "nota1" => 7,
        "nota2" => 6,
    ],
    [
        "nombre" => "Ramon Rivas",
        "nota1" => 3.5,
        "nota2" => 6,
    ]
];


function calcularNotaMedia($n1, $n2){
    return ($n1 + $n2)/2;

}



include "index.view.php";


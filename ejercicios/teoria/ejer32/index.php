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

$tabla =  "<table border='1'>
<tr>
    <th>Nombre</th>
    <th>Nota 1</th>
    <th>Nota 2</th>
    <th>Nota media</th>
</tr>";

function imprimirTabla($agenda) {
    $datos = "";
    foreach($agenda as $persona) {
        
        $datos .= "<tr>
            <td>{$persona['nombre']}</td>
            <td>{$persona['nota1']}</td>
            <td>{$persona['nota2']}</td>
            <td></td>
        </tr>";
    }

    return $datos;
}

function calcularNotaMedia($nota1, $nota2){

}

$tablaFinal = $tabla . imprimirTabla($agenda);

include "index.view.php";
?>

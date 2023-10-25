<?php
$agenda = [
    [
        "nombre" => "Amaia",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945678765",
        "email" => "agorbea@gmail.com"
    ],
    [
        "nombre" => "Pepe",
        "apellidos" => "Garcia Gutierrez",
        "telefono" => "677890987",
        "email" => "pepe@gmail.com"
    ],
    [
        "nombre" => "Pepe",
        "apellidos" => "Garcia Gutierrez",
        "telefono" => "677890987",
        "email" => "pepe@gmail.com"
    ],
    [
        "nombre" => "Pepe",
        "apellidos" => "Garcia Gutierrez",
        "telefono" => "677890987",
        "email" => "pepe@gmail.com"
    ],
    [
        "nombre" => "Pepe",
        "apellidos" => "Garcia Gutierrez",
        "telefono" => "677890987",
        "email" => "pepe@gmail.com"
    ],
];

$tabla =  "<table border='1'>
<tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Teléfono</th>
    <th>Email</th>
</tr>";

function imprimirTabla($agenda) {
    $datos = "";
    foreach($agenda as $persona) {
        $datos .= "<tr>
            <td>{$persona['nombre']}</td>
            <td>{$persona['apellidos']}</td>
            <td>{$persona['telefono']}</td>
            <td>{$persona['email']}</td>
        </tr>";
    }

    return $datos;
}

$tablaFinal = $tabla . imprimirTabla($agenda);

include "index.view.php";
?>

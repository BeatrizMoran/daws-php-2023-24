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
$datos = "";
function imprimirTabla($agenda) {
  $datos = "";
    $totalPersonas = count($agenda);
    for ($i = 0; $i < $totalPersonas; $i++) {
        $datos = $datos . "<tr>
                <td>{$agenda[$i]['nombre']}</td>
                <td>{$agenda[$i]['apellidos']}</td>
                <td>{$agenda[$i]['telefono']}</td>
                <td>{$agenda[$i]['email']}</td>
              </tr>";
    }

    return $datos . "</table>";

}

$tablaFinal =  $tabla . imprimirTabla(($agenda));

include "index.view.php";


?>

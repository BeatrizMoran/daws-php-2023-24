<?php

$usuarios = array(
    "bea" => array (
        "passwd" => "12345",
        "email" => "bea@gmail.com"
    ),
    "pepe" => array (
        "passwd" => "54321",
        "email" => "pepe@gmail.com"
    ),
    "juan" => array (
        "passwd" => "juan123",
        "email" => "juan@gmail.com"
    ),
);

function comprobar($usuarios) {
    $user = $_GET["usuario"];
    $passwd = $_GET["passwd"];

    //array_key_exists($usuario, $usuarios);

    if (isset($usuarios[$user])) {
        if ($usuarios[$user]["passwd"] === $passwd) {
            return "Usuario y contraseña correctos"; // Usuario y contraseña correctos
        } else {
            return "Contraseña incorrecta"; // Contraseña incorrecta
        }
    } else {
        return "Usuario no encontrado"; // Usuario no encontrado
    }
}

$resultado = comprobar($usuarios);

include "index.view.php";

?>

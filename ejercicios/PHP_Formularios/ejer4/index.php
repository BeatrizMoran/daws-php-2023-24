<?php

$usuarios = array(
    "user1" => array(
        "nombre" => "Ane",
        "apellidos" => "Lopez",
        "passwd" => "123Abc"
    ),
    "user2" => array(
        "nombre" => "Amaia",
        "apellidos" => "Otsoa",
        "passwd" => "Abc123"
    )
);

function login($usuarios){
    if(isset($_POST["usuario"]) && isset($_POST["passwd"])){
        $usuario = $_POST["usuario"];
        $passwd = $_POST["passwd"];

        $usuarioEncontrado = false;
        $contraseñaCorrecta = false;
        $datos = array();

        foreach ($usuarios as $user => $info) {
            if($user === $usuario){
                $usuarioEncontrado = true;
                $datos = $info;
                if($datos["passwd"] === $passwd){
                    $contraseñaCorrecta = true;
                    break; // No es necesario seguir iterando si encontramos una coincidencia
                }
            }
        }

        if(!$usuarioEncontrado ){
            return "<p class='mensajeError'>Usuario incorrecto</p>";
        }
        if(!$contraseñaCorrecta){
         return "<p class='mensajeError'>Contraseña incorrecta</p>";

        }

        $cadena = "<p class='datos'><span class='bienvenida'>Bienvenido/a </span> $datos[nombre] 
                  $datos[apellidos]!</p>";
        return $cadena;
    }

    return " "; // Si no se enviaron los datos, devolvemos una cadena vacía.
}

$respuesta = login($usuarios);
require "index.view.php";

?>

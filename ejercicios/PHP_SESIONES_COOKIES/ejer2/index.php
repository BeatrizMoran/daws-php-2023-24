<?php

function prueba(){
    if(isset($_POST["texto"])){
        $texto = $_POST["texto"];
        setcookie("usuario", $texto);
        return $_COOKIE["usuario"];
    }

    if (isset($_POST['borrar_cookie'])) {
        setcookie('usuario', '', time() - 3600);
        return null; // Devolver null para indicar que la cookie ha sido borrada
    }

    return null; // Devolver null si no se hizo ninguna acción
}

$user = prueba();

require "index.view.php";

?>

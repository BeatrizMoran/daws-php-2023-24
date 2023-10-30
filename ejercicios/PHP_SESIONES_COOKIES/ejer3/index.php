<?php

    if(isset($_POST["idioma"])){
        $idioma = $_POST["idioma"];
        setcookie("idioma", $idioma, time() +60, "/" );
    }

    if(isset($_COOKIE['idioma'])){
        $ultimo_idioma = $_COOKIE['idioma'];
    } else {
        $ultimo_idioma = "Ningún idioma seleccionado";
    }  




require "index.view.php";

?>

<?php

function prueba(){
if(isset($_POST["texto"])){
   $texto = $_POST["texto"];

   setcookie("usuario", $texto);

   return $_COOKIE["usuario"];
}
if (isset($_POST['borrar_cookie'])) {
   setcookie('usuario', NULL, -1);
}
}

$user = prueba();

   require "index.view.php";

  
?>
<?php

function prueba(){
if(isset($_POST["texto"])){
   $texto = $_POST["texto"];

   setcookie("usuario", $texto);

   return $_COOKIE["usuario"];
}
}

$user = prueba();

   require "index.view.php";

  
?>
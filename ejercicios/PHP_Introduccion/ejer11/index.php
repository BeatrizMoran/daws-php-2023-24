<?php

$c1 = $_GET["c1"];

   function combinar($c1 , $c2 = "hey"){
    $resultado = "{$c1} {$c2}";
    echo "La concatenacion es: $resultado";
   }

   require "index-view.php";

  
?>
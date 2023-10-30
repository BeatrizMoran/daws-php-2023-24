<?php

$numeros = [];


for ($i=0; $i < 21 ; $i++) { 
   $numeroAleatorio = random_int(1, 10);
   array_push($numeros, $numeroAleatorio);
}

if(isset($_POST["num"])) {
   $numeroUsuario = $_POST["num"];
   $veces = array_count_values($numeros)[$numeroUsuario];
   if($veces == null)
      $veces = 0;
}



//mostrar array separado por comas --> implode(", ", $numeros);
   require "index.view.php";

  
?>
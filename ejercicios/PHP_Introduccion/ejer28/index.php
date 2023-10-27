<?php

$coches = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];

$coche = "";
foreach($coches as $c){
   $coche = $coche . "<li>$c</li>";

}




include "index.view.php";

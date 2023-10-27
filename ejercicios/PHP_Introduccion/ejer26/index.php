<?php

$coches = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];

$prueba = "";

$a = 0;

do {
   $prueba = $prueba . "<li>$coches[$a]</li>";

   $a++;
} while ($a < count($coches));





include "index.view.php";

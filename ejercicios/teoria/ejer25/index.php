<?php

$estudiantes = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

$prueba = "";

$a = 0;

while ($a < count($estudiantes)) {
   $prueba = $prueba . "<li>$estudiantes[$a]</li>";

   $a++;
}



include "index.view.php";

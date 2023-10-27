<?php

 $estudiantes = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

 $prueba = "";

for ($i=0; $i < count($estudiantes) ; $i++) { 
   $prueba = $prueba . "<li>$estudiantes[$i]</li>";
}

include "index.view.php";

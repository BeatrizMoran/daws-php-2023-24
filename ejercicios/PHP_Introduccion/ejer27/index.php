<?php

$grupos = ["Oomph!", "Rammstein", "Slipknot", "Avatar", "Volbeat", "Motionless in white", "PowerWolf", "Lord of the Lost"];

$musica = "";
foreach($grupos as $value){
   $musica = $musica . "<li>$value</li>";
}


include "index.view.php";

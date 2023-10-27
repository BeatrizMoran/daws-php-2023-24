<?php

global $dia;

function diaSemana($n1){
    switch($n1){
        case  1:
            return "Lunes";
            break;
        case 2:
            return "Martes";
            break;
        case 3:
            return "Miercoles";
            break;
        case 4:
            return "Jueves";
            break;
        case 5:
            return "Viernes";
            break;
        case 6:
            return "Sabado";
            break;
        case 7:
            return "Domingo";
            break;
        default:
            return "ERROR";

    }
}

$dia = diaSemana(7);


include "index.view.php";

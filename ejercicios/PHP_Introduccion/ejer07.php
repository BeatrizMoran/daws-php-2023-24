<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <p><b>Enunciado: </b><br>.¿Cómo mejorarías el ejercicio anterior para que la función sea más reutilizable?
Piénsalo bien y modifica la función.</p>
   
<?php

    $numero = $_GET["numero"];

    function cuadrado($numero){
        return $numero*$numero;
       }

       echo "El cuadrado de $numero es: " . cuadrado($numero);
?>

</body>
</html>
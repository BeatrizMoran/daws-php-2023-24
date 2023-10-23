<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer13</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <p><b>Enunciado: </b><br>. Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
nombres de colores ($colores).<br>
■ Calcula el número de elementos de cada array.<br>
■ Añade un elemento al final del array $animales utilizando una función.<br>
■ Añade un elemento al principio del array $colores utilizando una función.<br>
■ Crea un tercer array que incluya los elementos de los dos arrays</p>
   
<?php
 
  
?>
<h3>
    <?= "Numero de animales: " . count(($animales));?>

</h3>
<h3>
    <?= "Numero de colores: " . count(($colores));?>

</h3>

<h3>
<?=insertarFinal($animales, $valor); ?>

</h3>

<h3>
<?=insertarPrincipio($colores, $c); ?>

</h3>

<h3>
<?=combinarArrays($animales, $colores); ?>

</h3>


</body>
</html>
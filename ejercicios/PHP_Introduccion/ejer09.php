<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer9</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <p><b>Enunciado: </b><br>.Escribe una función que reciba como parámetro dos cadenas de texto y
devuelva la concatenación de dichas cadenas. Muestra el resultado obtenido
por pantalla</p>
   
<?php
   $c1 = $_GET["c1"];
   $c2 = $_GET["c2"];

   function combinar($c1, $c2){
    return $c1 . " " . $c2;
   }

   echo "La concatenacion es: " . combinar($c1, $c2);
  
?>

</body>
</html>
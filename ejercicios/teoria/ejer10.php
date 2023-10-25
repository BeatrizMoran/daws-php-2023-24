<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <p><b>Enunciado: </b><br>. Modifica la función anterior para que establezca un valor por defecto a una
de las cadenas</p>
   
<?php
   $c1 = $_GET["c1"];


   function combinar($c1 , $c2 = "hey"){
    $resultado = "{$c1} {$c2}";
    echo "La concatenacion es: $resultado";
   }

   combinar($c1);


  
?>

</body>
</html>
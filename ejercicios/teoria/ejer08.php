<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer8</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <p><b>Enunciado: </b><br>.Crea una función llamada esMayor() que reciba como parámetros dos
números y devuelva TRUE si el primer número es mayor que el segundo</p>
   
<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    function esMayor($n1, $n2){
        if($n1 > $n2)
            return "true";
        else
            return "false";
    }

    echo esMayor($n1, $n2);

  
?>

</body>
</html>
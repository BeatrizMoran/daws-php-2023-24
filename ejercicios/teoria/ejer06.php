<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer3</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <p><b>Enunciado: </b><br>.Crea una función llamada multiplicar que reciba dos variables, a y b, y muestre
el resultado de la multiplicación por pantalla. Para probar el ejercicio se enviarán
los valores mediante una petición GET.</p>
   
<?php 

    echo "resultado: "  . multiplicar(2,4);
    function multiplicar($n1, $n2){
        return $n1*$n2;
    }
?>

</body>
</html>
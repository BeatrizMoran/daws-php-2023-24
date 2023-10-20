<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer3</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <p><b>Enunciado: </b><br>.Crea dos variables, a y b que recojan los valores enviados mediante el método
GET. Almacena el resultado de las siguientes operaciones en nuevas variables y
muéstralas por pantalla.</p>
    <?php 
        $a = $_GET["a"];
        $b = $_GET["b"];

        $resta = $a - $b;

        echo "Resta: $resta";

    ?>

    <h3> <?= "Mi amigo $nombre tiene $edad años" ?> </h3>
</body>
</html>
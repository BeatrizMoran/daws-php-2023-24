<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p><b>Enunciado: </b><br>. Crea un programa que muestre el nombre de usuario enviado en la URL:</p>
    <?php 
        $user = $_GET["user"];
        
    ?>

    <h3> <?= "Bienvenido, $user" ?> </h3>
</body>
</html>
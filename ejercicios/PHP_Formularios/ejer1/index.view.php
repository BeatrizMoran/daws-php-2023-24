<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <p><b>Enunciado: </b><br>Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
de forma que el usuario pueda seguir introduciendo valores. </p>
   
<h3><?=  "Resultado de la conversion ($grados $prueba): $temp"; ?></h3>

<form action="index.php" method="post">
    <label>Introduce la temperatura: </label>
    <input type="text" name="temp" id="temp"><br>
    <label>Indica la unidad de la temperatura introducida: </label>
    <select  name="c">
        <option value="cel" >Celsius</option>
        <option value="far">Farenheit</option>

    </select><br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
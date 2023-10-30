<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer03</title>
</head>
<body>
    <h1>Ejercicio 03</h1>
    <p><b>Enunciado: </b><br>Crea un array con 20 números aleatorios entre el 1 y el 10 utilizando la función
random_int(). El usuario introducirá en el formulario un número y al darle a “Enviar”
la aplicación comprobará cuántas veces aparece el número introducido en el array
<br>
Pista: Las funciones implote() y explode() pueden ser de gran utilidad, ya que en
cada envío tendrás que enviar los 20 numeros aleatorios y el número del usuario.</p>
   
<p><?= "El array: " . implode(", ", $numeros); ?></p>

<h2><?php
if(isset($_POST["num"])){
    echo "El numero aparece $veces veces en el array";
}
?>
</h2>

<form action="index.php" method="post">
    <label>Introduce tu numero:</label>
    <input type="number" name="num" id="num"><br>
    
    <input type="submit" value="¡Probar suerte!" id="enviar">
</form>

</body>
</html>
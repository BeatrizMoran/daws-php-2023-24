<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer02</title>
</head>
<body>
    <h1>Ejercicio 02</h1>
    <p><b>Enunciado: </b><br>Crea una aplicación que simule una
calculadora. La calculadora estará
representada por un formulario con dos
campos numéricos y un desplegable
para indicar la operación que se desea
realizar (suma, resta, multiplicación o
división). La aplicación deberá mostrar el
resultado de la operación realizada y
mostrar un mensaje de error cuando se
intente dividir entre cero </p>
   

<h3>Calculadora</h3>

<h2><?= "Resultado: " . $num;?></h2>
<form action="index.php" method="post">
    <label>Primer numero </label>
    <input type="number" name="n1" id="n1"><br>
    <label>Segundo numero: </label>
    <input type="number" name="n2" id="n2"><br>

    <select  name="op">
        <option value="sum" >Suma</option>
        <option value="res">Resta</option>
        <option value="multi">Multiplicacion</option>
        <option value="div">Division</option>
    </select><br><br>
    <input type="submit" value="Calcular">
</form>


</body>
</html>
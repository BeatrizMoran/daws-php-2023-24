<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer02</title>
</head>
<body>
    <h1>Ejercicio 02</h1>
    <p><b>Enunciado: </b><br> Añade a la aplicación anterior un botón o enlace para borrar la cookie de nombre
“usuario”
 </p>
   

<h3>Calculadora</h3>

<h2><?=
     "USUARIO: " . $user; ?>
</h2>
<form action="index.php" method="post">
    <label>Introduce el texto que deseas almacenar:</label>
    <input type="text" name="texto" id="texto"><br>
    <input type="submit" value="Calcular">
</form>
<form action="index.php" method="post">
    <input type="hidden" name="borrar_cookie" value="1">
    <input type="submit" value="Borrar Cookie">
</form>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer01</title>
</head>
<body>
    <h1>Ejercicio 01</h1>
    <p><b>Enunciado: </b><br>Crea una página que tenga un formulario con un campo de texto en el que poder
almacenar un nombre de usuario. La aplicación guardará el texto introducido en una cookie
(sin especificar la duración) de nombre “usuario” y mostrará el último valor almacenado
siempre que la cookie contenga algún valor.
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


</body>
</html>
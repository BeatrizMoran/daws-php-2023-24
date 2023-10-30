<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>ejer04</title>
</head>
<body>
    <h1>Ejercicio 03</h1>
    <p><b>Enunciado: </b><br>Crea una pantalla de login con dos campos:
usuario y contraseña. El programa deberá
validar los datos de acceso contra un diccionario
de datos como el de la imagen. El programa
deberá mostrar un mensaje de bienvenida con
su nombre y apellidos en caso de que los datos
sean correctos.<br>
También indicará si el usuario introducido no
existe o si la contraseña introducida es
incorrecta.</p>
   
<p><?= $respuesta ?></p>

<h2>
</h2>

<form action="index.php" method="post">
    <label>Usuario:</label>
    <input type="text" name="usuario" id="usuario"><br>
    <label>Contraseña:</label>
    <input type="password" name="passwd" id="passwd"><br>
    <input type="submit" value="Iniciar Sesion" id="login">
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer01</title>
</head>
<body>
    <h1>Ejercicio 01</h1>
    <p><b>Enunciado: </b><br> Desarrolla una página de login con un formulario compuesto por los campos de usuario y
contraseña. La aplicación no dejará continuar hasta que se inicie sesión con un nombre de
usuario y contraseña correctos (a comprobar contra un array asociativo). Una vez el usuario
haya accedido correctamente, en lugar del formulario de acceso la aplicación mostrará un
mensaje de bienvenida y un enlace para cerrar sesión. Al hacer click en el enlace para cerrar
sesión, la aplicación destruirá información de la sesión almacenada.
 </p>
   
 <p><?=$mensaje ?></p>

    <h2>Añadir asistente</h2>
    <form action="index.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="user" id="user"><br>
        <label>Contraseña:</label>
        <input type="password" name="passwd" id="passwd">
        <input type="submit" value="Iniciar sesion" id="login">
    </form>

</body>
</html>

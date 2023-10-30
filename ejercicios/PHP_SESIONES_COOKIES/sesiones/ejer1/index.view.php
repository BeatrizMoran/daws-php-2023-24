<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer01</title>
</head>
<body>
    <h1>Ejercicio 01</h1>
    <p><b>Enunciado: </b><br>Crea una aplicación de control de asistencia
para un evento. La aplicación tendrá que mostrar la
lista de personas (el nombre de cada una) que han
acudido al evento. Tendrá un campo de texto para
escribir el nombre de la persona y así añadir
personas a la lista. La lista se almacenará en sesión,
y existirá un botón que borre la lista completa
 </p>
   <h2>Lista de asistentes</h2>
   <ul>
        <?php 
        if(isset($_SESSION['asistentes'])){
            foreach($_SESSION['asistentes'] as $asistente){?>
                <li><?= $asistente;?></li>
            <?php }
        }?>
   </ul>

    <h2>Añadir asistente</h2>
    <form action="index.php" method="post">
        <input type="text" name="asistente" id="asistente">
        <input type="submit" value="Añadir">
    </form>

    <form action="index.php" method="post">
        <input type="hidden" name="vaciar_lista" value="1">
        <input type="submit" value="Vaciar lista">
    </form>
</body>
</html>

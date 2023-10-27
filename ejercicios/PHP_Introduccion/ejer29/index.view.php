<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer29</title>
</head>
<body>
    <h1>Ejercicio 29</h1>
    <p><b>Enunciado: </b><br> Modifica el ejercicio número 24 para obtener el mismo resultado empleando
una estructura foreach <p>
<br>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Email</th>
</tr>
    <?php 
        foreach($agenda as $persona){?>
            <tr>
                <td><?= $persona['nombre'];?></td>
                <td><?= $persona['apellidos'];?></td>
                <td><?= $persona['telefono'];?></td>
                <td><?= $persona['email'];?></td>
            </tr>
     <?php }?>
</table>


</body>
</html>

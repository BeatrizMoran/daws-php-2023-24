<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer29</title>
</head>
<body>
    <h1>Ejercicio 32</h1>
    <p><b>Enunciado: </b><br>Crea un array asociativo que almacene los nombres de 4 estudiantes y las
notas de dos exámenes. A continuación, crea de forma dinámica una tabla
como la de la imagen utilizando los valores del array y la estructura de
repetición que creas conveniente. Cuando la nota sea inferior a 5, esta deberá
mostrarse en rojo <p>
<br>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Nota1</th>
        <th>Nota2</th>
        <th>Media</th>
    </tr>
    <?php 
        foreach($agenda as $persona){
            $nota1Color = $persona['nota1'] < 5 ? ' style="color: red;"' : '';
            $nota2Color = $persona['nota2'] < 5 ? ' style="color: red;"' : '';
            $media = calcularNotaMedia($persona['nota1'], $persona['nota2']);
            $mediaColor = $media < 5 ? ' style="color: red;"' : '';
            ?>
            <tr>
                <td><?= $persona['nombre'];?></td>
                <td<?= $nota1Color;?>><?= $persona['nota1'];?></td>
                <td<?= $nota2Color;?>><?= $persona['nota2'];?></td>
                <td<?= $mediaColor;?>><?= $media;?></td>
            </tr>
     <?php }?>
</table>



</body>
</html>

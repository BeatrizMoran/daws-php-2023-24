<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer01</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
   
<h1>catalogo de productos</h1>
<div id="contenedor">
<form action="index.php" method="post">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
            <?php foreach ($productos as $id => $prod) {?>
            <tr>
                <td><?=$prod["nombre"]?></td>
                <td><?=$prod["descripcion"]?></td>
                <td><?=$prod["precio"]?></td>
                <td><input type="number" name="<?= $id ?>" id="cantidad" value=0></td>
            </tr>

            <?php }?>
    </table>
    <input type="button" value="comprar" id="comprar" name="comprar">
</form>
</div>

</body>
</html>

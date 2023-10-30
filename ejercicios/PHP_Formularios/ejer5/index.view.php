<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>ejer05</title>
</head>
<body>
    <h1>Ejercicio 05</h1>
    <p><b>Enunciado: </b><br>Desarrolla una tienda online con un catálogo de productos y un carrito de la compra.
Cada producto tendrá la siguiente información: nombre, descripción y precio (puedes
almacenar otra información extra que te sirva de ayuda, como un ID). Se podrán adquirir
tantas unidades de cada producto como se desee (también podrá eliminarse un producto
añadido o una unidad del mismo).<br>
La aplicación mostrará un formulario en el que indicar la cantidad de cada producto. Al
hacer click en “Enviar” la aplicación le llevará al usuario a otra página donde únicamente
mostrará el valor total de la compra realizara y un enlace para volver a la página anterior</p>
   

<h1>Tienda online</h1>

<h2>Catalogo de productos:</h2>
<div id="contenedor">
    <div id="catalogo">
        <form action="index.php" method="post"> <!-- Añadido formulario -->
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
                <?php 
                    foreach($productos as $id => $producto){
                        $nombre = $producto['Nombre'];
                        $desc = $producto['Descripcion'];
                        $precio = $producto['Precio'];

                        ?>
                        <tr>
                            <td><?= $nombre ?></td>
                            <td><?= $desc ?></td>
                            <td><?= $precio ?></td>
                            <td>
                                <input type="hidden" name="producto[<?= $id ?>][id]" value="<?= $id ?>">
                                <input type="number" name="producto[<?= $id ?>][cantidad]" value="1" min="1">
                            </td>
                        </tr>
                <?php }?>

            </table>
            <input type="submit" value="Comprar">
        </form> 
    </div>
    <div id="carrito" style="display: none;">
  
    <?php

        $detallesCompra = carrito($productos);
        echo "<b>$detallesCompra</b>";
    ?>
</div>
</div>


</body>
</html>
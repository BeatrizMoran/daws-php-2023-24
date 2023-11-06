<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>ejer05</title>
</head>
<body>
    <h1>Lista de la compra</h1>
    <ul><?php 
                    foreach($productos as $row){
                        $p = $row['producto'];

                        ?>
                        <li><?= $p ?></li>
                <?php }?>
    </ul>
    <form action="index.php" method="post">
        <label>Añadir elemento</label>
        <input type="text" id="producto" name="producto">
        <input type="button" value="Añadir" id="enviar">
    </form>


</body>
</html>
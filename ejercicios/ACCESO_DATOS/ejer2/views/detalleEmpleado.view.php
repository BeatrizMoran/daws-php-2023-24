<?php require 'partials/head.php' ?>

<table>   
    <tr>
    <?php foreach ($empleado[0] as $campo => $valor) { ?>
                    <tr>
                    <td><?= $campo ?></td>
                    <td><?= $valor ?></td>
                </tr>
                <?php } ?>
    </tr>
</table>
<a href="index.php">Volver</a>
<?php require 'partials/footer.php' ?>


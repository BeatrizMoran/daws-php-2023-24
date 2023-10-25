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

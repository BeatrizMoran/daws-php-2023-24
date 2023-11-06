<?php require 'partials/head.php' ?>
<div id="contenedor">
    <div id="tabla">
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Operaciones</th>
            </tr>

                <?php foreach ($empleados as $emp) { ?>
                    <tr>
                    <td><?= $emp['dni'] ?></td>
                    <td><?= $emp['nombre'] ?></td>
                    <td><?= $emp['apellidos'] ?></td>
                    <td><a href="index.php?accion=verDetalle&persona=<?=$emp['dni']?>">Ver detalles </a> |
                    <a href="index.php?accion=eliminar&persona=<?=$emp['dni']?>">Eliminar</a></td>
                </tr>
                <?php } ?>
        
        </table>
    </div>
    <div id="formulario">
        <h2>Añadir nuevo empleado</h2>
        <form action="index.php" method="post">
            <input type="text" placeholder="Nombre" name="nombre" id="nombre" required="require">
            <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" required="require">
            <input type="number" placeholder="Edad" name="edad" required="require">
            <input type="date" name="fechaNac" required="require">
            <input type="email" placeholder="Email" name="email" required="require">
            <input type="text" placeholder="DNI" name="dni" required="require">
            <select name="sexo" required="require">
                <option value="mujer">Mujer</option>
                <option value="hombre">Hombre</option>
            </select>
            <textarea name="cv" placeholder="Curriculum" required="require"></textarea>
            <input type="hidden" name="accion" value="insertar">
            <input type="submit" value="Añadir" name="aceptar" id="aceptar">
        </form>
        <a href="index.php?accion=vaciar">Vaciar lista</a>
    </div>
</div>
<?php require("partials/footer.php") ?>


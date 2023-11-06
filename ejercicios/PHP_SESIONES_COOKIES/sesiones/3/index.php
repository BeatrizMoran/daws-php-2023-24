<?php
$productos = array(
    "p1" => array(
        "Nombre" => "Producto 1",
        "Descripcion" => "Descripción del producto 1.",
        "Precio" => 10.99
    ),
    "p2" => array(
        "Nombre" => "Producto 2",
        "Descripcion" => "Descripción del producto 2.",
        "Precio" => 20.49
    ),
    "p3" => array(
        "Nombre" => "Producto 3",
        "Descripcion" => "Descripción del producto 3.",
        "Precio" => 15.99
    )
);

function carrito($productos){
    if(isset($_POST['producto'])){
        $carrito = $_POST['producto'];

        // Calcular total
        $total = 0;
        foreach($carrito as $id => $cantidad){
            $total += $productos[$id]['Precio'] * $cantidad['cantidad'];
        }

        // Mostrar detalles del carrito
        $detalles = "<h2>Detalle de la compra:</h2><ul>";
        foreach($carrito as $id => $cantidad){
            if($cantidad['cantidad'] > 0){
                $detalles .= "<li>{$productos[$id]['Nombre']} - Cantidad: {$cantidad['cantidad']}</li>";
            }
        }
        $detalles .= "</ul>";

        // Precio total
        $precioTotal = "<h2>Precio total:</h2><p>El importe total de la compra realizado es de: $total euros</p>";

        // Enlace para volver
        $volver = '<a href="index.php" class="enlace" >Volver al catálogo</a>';
        echo '<script>document.getElementById("carrito").style.display = "block";</script>';

        return $detalles . $precioTotal . $volver;
    } else {
        return "<p>No se han seleccionado productos.</p>";
    }
}

require "index.view.php";
?>

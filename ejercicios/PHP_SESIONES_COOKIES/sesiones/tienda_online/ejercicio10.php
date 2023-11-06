<?php

// Si no hay ninguna cesta en sesión la crea
function inicializarCesta(){
    if(!isset($_SESSION["productosCesta"])){
        $_SESSION["productosCesta"] = array();
    }
}

function guardarFavorito($id){
    // Cojo el valor de las cookies y lo convierto en array, ya que no pueden almacenar Arrays.
    if(isset($_COOKIE["favoritos"])){
        $favoritos = explode(",",$_COOKIE["favoritos"]); //convertir el string en array
    } else {
        $favoritos = [];
    }
    // Añado el nuevo producto favorito al array
    array_push($favoritos, $id);
    // Vuelvo a almacenar los favoritos en las cookies, convirtiéndolo a string
    $favoritosString = implode(",",$favoritos);
    setcookie("favoritos", $favoritosString, time() + 7*24*60*60); // guardarlo como string
    $_COOKIE["favoritos"] = $favoritosString;
}

function esFavorito($id){
    if(isset($_COOKIE["favoritos"])){
        // Creo un array de favoritos a partir del string almacenado en la cookie
        $array_favoritos = explode(",",$_COOKIE["favoritos"]);
        return in_array($id, $array_favoritos);
    }
    return false;
}

function calcularPrecioTotal($productosComprados, $catalogoProductos){
    $precioTotal = 0;
    foreach ($productosComprados as $idProducto) {
        $precioTotal += $catalogoProductos[$idProducto]['precio'];
    }
    return $precioTotal;
}

function realizarAccion($accion){
    switch ($accion) {
        case "insertar":
            if(isset($_GET["idProducto"])) {
                $idProductoComprado = $_GET["idProducto"];
                array_push($_SESSION["productosCesta"], $idProductoComprado);
            }
            break;
        case "favorito":
            guardarFavorito($id = $_GET["idProducto"]);
            break;
        case "comprar":
            unset($_SESSION["productosCesta"]);
            break;
        case "detalle":
            $id = $_GET["idProducto"];
            // Cargar los datos
            require_once 'ejercicio10-datos.php';
            // Dejar disponible los datos a la vista:
            $nombre = $productos[$id]["nombre"];
            $descripcion = $productos[$id]["descripción"];
            $precio = $productos[$id]["precio"];

            // En este caso hay que navegar a otra vista, por eso
            // la cargamos aquí y llamamos a die() para terminar la ejecución.
            require "ejercicio10detalle.view.php";
            die();
            break;
        case "idioma":
            // Almacenamos el idioma que nos estén enviando
            if(isset($_GET["idioma"])) {
                setcookie("idioma", $_GET["idioma"], time()+60);
                // Dejamos ya actualizada también la cookie en el servidor:
                $_COOKIE["idioma"] = $_GET["idioma"];
            }
    }
}

/*** INICIO DE LA APLICACION ***/

// 1. Cargar/Iniciar la sesión
session_start();

// 2. Crear la cesta vacía si no está ya creada
inicializarCesta();

// 3. Realizar la accion indicada por el usuario (insertar producto o comprar los productos de la cesta
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}

// 4. Preparar los datos para la vista
require_once 'ejercicio10-datos.php';

// Cargamos el idioma (si no hay ninguno todavía, por defecto dejamos Castellano):
$idioma = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "Castellano";

if(isset($_SESSION["productosCesta"])) {
    // Preparamos los datos que necesitaremos desde la vista
    $productosComprados = $_SESSION["productosCesta"];
    $precioTotal = calcularPrecioTotal($productosComprados, $productos);
}

// 5. Cargar la vista
require "ejercicio10.view.php";
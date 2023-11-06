<?php

function connect($host, $dbname, $user, $pass){
    try{
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

}

$dbh = connect("127.0.0.1", "compra", "root", "");


if(isset($_POST["producto"])){
    $producto = $_POST["producto"];
    insertarProducto($dbh, $producto);


}

function insertarProducto($dbh, $producto){
    $data = array("producto" => $producto);

    //insertar
    $stmt= $dbh->prepare("
 INSERT INTO lista (producto)
 values (:producto)" );

 $stmt->execute($data);
}

function seleccionarTodo($dbh){
    $stmt = $dbh->prepare("SELECT producto from lista");
    $stmt->execute();


    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

$productos = seleccionarTodo($dbh);


require "index.view.php";



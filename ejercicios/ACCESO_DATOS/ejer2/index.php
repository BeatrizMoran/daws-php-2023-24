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

$dbh = connect("127.0.0.1", "ejer2", "root", "");

function realizarAccion($accion, $dbh){
    
    switch($accion){
        case "insertar":
            if(isset($_POST["dni"])){
                crearEmpleado($dbh);
            }
            break;
        case "eliminar":
            eliminarEmpleado($dbh);
            
            break;
        case "verDetalle":
            break;

    }
}

function eliminarEmpleado($dbh){
    $stmt= $dbh->prepare("
    delete from empleados 
    where dni = :dni " );
   
    $stmt->bindParam(':dni', $_POST["dni"]);

    $stmt->execute(); 
}

function crearEmpleado($dbh){

   
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $ed = $_POST["edad"];
    $email = $_POST["email"];
    $dni = $_POST["dni"];

    $edad = intval($ed);

    //$cv = $_POST["cv"];
    //$fechaNac = $_POST["fechaNac"];


    $empleado = array("nombre" => $nombre,
                    "apellidos" => $apellidos,
                    "edad" => $edad,
                    "email" => $email,
                    "dni" => $dni);
                   // "cv" => $cv, 
                    //"fechaNac" => $fechaNac);

    //insertar
    $stmt= $dbh->prepare("
 INSERT INTO empleados (dni, nombre, apellidos, edad, email)
 values (:dni, :nombre, :apellidos, :edad, :email)" );

 $stmt->execute($empleado); 
    

}

// Si el usuario ha realizado una acción, la realizamos.
if(isset($_POST["accion"])) {
    $accion = $_POST["accion"];
    realizarAccion($accion, $dbh);
}



function getAll($dbh){
    $stmt = $dbh->prepare("SELECT dni, nombre, apellidos from empleados");
    $stmt->execute();


    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$empleados = getAll($dbh);

require "views/index.view.php" ;
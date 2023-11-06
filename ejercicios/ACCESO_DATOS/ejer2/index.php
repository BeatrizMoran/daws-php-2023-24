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
            if(isset($_GET["dni"])){
                crearEmpleado($dbh);
            }
            break;
        case "eliminar":
                if(isset($_GET["persona"])){
                    $dni = $_GET["persona"];
                    eliminarEmpleado($dbh,$dni );
                }
                break;
        case "vaciar":
            eliminarTodo($dbh);
            break;
        case "verDetalle":
            $empleado = verDetalleEmpleado($dbh, $_GET["persona"]);
            require "views/detalleEmpleado.view.php";
            exit();
            break;

    }
}

function verDetalleEmpleado($dbh, $dni){
    $stmt = $dbh->prepare("select * from empleados where dni = :dni");

    $data = array("dni" => $dni);

    $stmt->execute($data);


    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function eliminarTodo($dbh){
    $stmt = $dbh->prepare("delete from empleados");
    $stmt->execute();

}

function eliminarEmpleado($dbh, $dni){
   $stmt= $dbh->prepare("
    DELETE FROM empleados 
    WHERE DNI = :dni
");

$data = array("dni" => $dni);
   
   

    $stmt->execute($data); 
}

function crearEmpleado($dbh){

   
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $ed = $_GET["edad"];
    $email = $_GET["email"];
    $dni = $_GET["dni"];

    $edad = intval($ed);

    $cv = $_GET["cv"];
    $fechaNac = $_GET["fechaNac"];
    $sexo = $_GET["sexo"];



    $empleado = array("nombre" => $nombre,
                    "apellidos" => $apellidos,
                    "edad" => $edad,
                    "email" => $email,
                    "dni" => $dni,
                   "cv" => $cv, 
                    "fechaNac" => $fechaNac,
                    "sexo" => $sexo);

    //insertar
    $stmt= $dbh->prepare("
 INSERT INTO empleados (dni, nombre, apellidos, edad, email, fechaNac, curriculum, sexo)
 values (:dni, :nombre, :apellidos, :edad, :email, :fechaNac, :cv, :sexo)" );

 $stmt->execute($empleado); 
    

}

// Si el usuario ha realizado una acción, la realizamos.
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion, $dbh);
}



function getAll($dbh){
    $stmt = $dbh->prepare("SELECT dni, nombre, apellidos from empleados");
    $stmt->execute();


    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$empleados = getAll($dbh);

require "views/index.view.php" ;
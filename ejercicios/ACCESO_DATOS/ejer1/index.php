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

$dbh = connect("127.0.0.1", "ejer1", "root", "");

function seleccionarTodo($dbh){
    $stmt = $dbh->prepare("SELECT nombre, apellidos, email, edad
 FROM alumno" );

 $stmt->execute();

 while($row = $stmt->fetch()) {
    echo $row['nombre'] . "\n";
    echo $row['apellidos' ] . "\n";
    echo $row['email' ] . "\n";
    echo $row['edad'] . "\n";
   }
}

function selectWhereEdad($dbh){
// Incluir parámetros con la sintaxis :nombre
$stmt = $dbh->prepare("SELECT nombre, apellidos, email, edad
 FROM alumno
 WHERE edad > :edad" );

 $data = array( 'edad' => 18);

 $stmt->execute($data);

 while($row = $stmt->fetch()) {
    echo $row['nombre'] . "\n";
    echo $row['apellidos' ] . "\n";
    echo $row['email' ] . "\n";
    echo $row['edad'] . "\n";
   }
}

selectWhereEdad($dbh);
seleccionarTodo($dbh);

//insertar

function insertar($dbh){
    $stmt= $dbh->prepare("
 INSERT INTO alumno(nombre, apellidos, email, edad)
 values (:nombre, :apellidos, :email, :edad)" );

 $data = array( "nombre" => "Emilio",
                "apellidos" => "Rodriguez",
                "email" => "emilio@gmail.com",
                'edad' => 28);


$stmt->execute($data);

}

insertar(($dbh));



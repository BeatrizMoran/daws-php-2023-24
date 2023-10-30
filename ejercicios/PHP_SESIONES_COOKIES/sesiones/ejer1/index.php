<?php
session_start();
$asistentes = [];

if(isset($_POST['asistente'])){
   $nuevoAsistente = $_POST['asistente'];
   $_SESSION['asistentes'][] = $nuevoAsistente;
}

if(isset($_POST['vaciar_lista'])){
   $_SESSION['asistentes'] = array(); // Esto vacía la lista
}

   require "index.view.php";

  
?>
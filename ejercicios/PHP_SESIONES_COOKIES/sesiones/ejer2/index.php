<?php
$usuarios = [
   "Bea" => "123Abc",
   "Pepe" => "Abc123"
];


$mensaje = "";
if(isset($_POST["user"]) && isset($_POST["passwd"])){
   $usuario = $_POST["user"];
   $passwd = $_POST["passwd"];

   if(array_key_exists($usuario, $usuarios)){
      if($usuarios[$usuario] === $passwd){
         session_start();
         $_SESSION["usuario"] = $usuario;
         require "bienvenida.php";
         exit();
      }
      else{
         $mensaje = "Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
      }
   }
   else{
      $mensaje = "El usuario no existe";

   }

}

require "index.view.php";

  
?>
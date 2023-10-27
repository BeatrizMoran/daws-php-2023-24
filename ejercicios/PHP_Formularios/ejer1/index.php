<?php



   $grados = $_POST["temp"];
   $prueba = $_POST["c"];


   function convertirTemp($grados, $prueba){
      if($grados != null){
         if($prueba === 'cel'){
            return ($grados * (9/5) + 32);
         }else{
            return ($grados -32) * (5/9);

         }
      }
      else{
         echo '<script>alert("Error.- Introduce una temperatura.");</script>';
      }

   }

   $temp = round(convertirTemp($grados,$prueba),2);

   require "index.view.php";

  
?>
<?php


   $n1 = $_POST["n1"];
   $n2 = $_POST["n2"];

   $op = $_POST["op"];


   function calcular($n1, $n2, $op){
      if($n1 != null && $n2 != null){
         switch($op){
            case "sum":
               return $n1 + $n2;
               break;
            case "res":
               return $n1 - $n2;
               break;
            case "multi":
               return $n1 * $n2;
               break;
            case "div":
               return $n1 && $n2 != 0 ? $n1 / $n2 : '<script>alert("Error.- No se puede dividir entre 0.");</script>';
               
               break;

         }
      }
      else{
         echo '<script>alert("Error.- Te falta algun numero.");</script>';
      }

   }


   $num = calcular($n1,$n2, $op);
   require "index.view.php";

  
?>
<?php
   
    include("conectar.php");

   
     $id=$_GET["codigo"]; 

     
     
     $sql="Delete from sucursal where codigo=".$id;
     
     //echo $sql;

     $result = mysqli_query($con,$sql);
     
?>
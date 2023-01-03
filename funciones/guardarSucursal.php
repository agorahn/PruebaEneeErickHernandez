<?php
   
    include("conectar.php");

   
     $nombre=$_GET["nombre"]; 
     $administrador=$_GET["administrador"]; 
     $telefono=$_GET["telefono"]; 
     $direccion=$_GET["direccion"];
     $fax=$_GET["fax"]; 
     $pedidos=$_GET["pedidos"]; 
   
     
     /*
     $nombre="Prueba2"; 
     $administrador="prueba"; 
     $telefono="2333"; 
     $direccion="ningun";
     $fax="4444"; 
     $pedidos=23; 
     */
     
     
     $sql="INSERT INTO sucursal(nombre_sucursal,nombre_administrador,telefono,direccion,fax,numero_pedidos_mes) VALUES ('".$nombre."','".$administrador."','".$telefono."','".$direccion."','".$fax."',".$pedidos.")";
     
     //echo $sql;

             $result = mysqli_query($con,$sql);
     


?>
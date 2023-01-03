<?php
   
    include("conectar.php");
    
  //codigo=1nombre=La Ceiba&administrador=Erick Hernandez&telefono=3359-9289&direccion=Barrio Independencia&fax=2442-2233&pedidos=12

   $codigo=$_GET["codigo"]; 
     $nombre=$_GET["nombre"]; 
     $administrador=$_GET["administrador"]; 
     $telefono=$_GET["telefono"]; 
     $direccion=$_GET["direccion"];
     $fax=$_GET["fax"]; 
     $pedidos=$_GET["pedidos"]; 
   
 
      
     
     
     $sql="update sucursal set nombre_sucursal='".$nombre."',nombre_administrador='".$administrador."',telefono='".$telefono."',direccion='".$direccion."',fax='".$fax."',numero_pedidos_mes=".$pedidos." where codigo=".$codigo."";
     
 

             $result = mysqli_query($con,$sql);
     


?>
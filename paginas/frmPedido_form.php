<?php
require '../vendor/autoload.php';
$buscar="";
$estado=0;

//variables
$nombre="";
$apellido="";
$direccion="";
 $email="";
 $telefono="";
 $password="";
 $usertype="";
 $wallet="";
//variables

if (isset($_POST["buscar"])) {
   $buscar=$_POST["buscar"]; 
   $estado=1; 

   $usuario1 = new obj\Usuario();
   $usuario1-> get_Usuario($buscar);
   //print $usuario->name . ' ' . $usuario->apellido . ' ha sido creado<br>';


    $nombre=$usuario1->nombre;
    $apellido=$usuario1->apellido;
    $direccion=$usuario1->direccion;
    $email=$usuario1->email;
    $telefono=$usuario1->telefono;
    $password=$usuario1->correo;
    $usertype=$usuario1->usertype;
    $wallet=$usuario1->wallet;
    $codigo=$usuario1->codigo;
    
    


} else {    
    $buscar="";
    $estado=0; 
}

?>


<div class="container-fluid">

          <!-- Page Heading 
          <h1 class="h3 mb-4 text-gray-800">USER</h1>
          -->

          <div class="card-header py-0" style="
            padding-left: 0px;
            padding-right: 0px;
            border-bottom-width: 0px;">

              <nav aria-label="breadcrumb">

                   <nav aria-label="breadcrumb">
                  <ol class="breadcrumb" style="margin-bottom: 0px;">
                    <li class="breadcrumb-item"><a href="#" onclick="menu_change(2)">Pedido</a></li>
                    <li class="breadcrumb-item"><a href="#" onclick="menu_change(2)">Pedido Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Datos Orden</li>
                   
                  </ol>
                  
              </nav>
            </div> 



            <?php  



          echo ' <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary" >User Account</h5>

              <div class="p-3">
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleFormControlSelect1">First Name:</label>
                    <input type="text" class="form-control" id="exampleFirstName" placeholder="'.$nombre.'">
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleFormControlSelect1">Last Name:</label>
                    <input type="text" class="form-control" id="exampleLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="exampleFormControlSelect1">Direction:</label>
                    <input type="text" class="form-control" id="direccion" placeholder="">
                  </div>
                  <div class="col-sm-4">
                    <label for="exampleFormControlSelect1">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="">
                  </div>
                  <div class="col-sm-4">
                        <label for="exampleFormControlSelect1">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleFormControlSelect1">Wallet:</label>
                    <select class="form-control" id="wallet">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                     <label for="exampleFormControlSelect1">User Type:</label>
                    <select class="form-control" id="usertype">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleFormControlSelect1">Password:</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="">
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleFormControlSelect1">Repeat Password:</label>
                    <input type="password" class="form-control" id="exampleRepeatPassword" placeholder="">
                  </div>
                </div>
                <hr>
                
                <div align="rigth">
                <button class="btn btn-primary" type="submit" onclick="filtro_usuario()">
                    Register Account
                </button>

                </div>
            


                
              </form>
              
              
            </div>';


            ?>
             
            </div>

            <div id="idTable">


                    

            </div>
 
           </div>


</div>
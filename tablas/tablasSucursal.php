<?php

include("conectar.php");

echo ' <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre de Sucursal</th>
                      <th>Administrador</th>
                      <th>Telefono</th>
                      <th>Direccion</th>
                      <th>Fax</th>
                      <th>Pedidos</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombre de Sucursal</th>
                      <th>Administrador</th>
                      <th>Telefono</th>
                      <th>Direccion</th>
                      <th>Fax</th>
                      <th>Pedidos</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>';
                  
                  
                  
                   $sql="select codigo,nombre_sucursal,nombre_administrador,telefono,direccion,fax,numero_pedidos_mes from sucursal";

             $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_array($result)) {



                    
                      

                      echo '<tr>
                      <td>'.$row['codigo'].'</td>
                      <td>'.$row['nombre_sucursal'].'</td>
                <td>'.$row['nombre_administrador'].'</td>
                <td>'.$row['telefono'].'</td>
                <td>'.$row['direccion'].'</td>
                <td>'.$row['fax'].'</td>
                <td>'.$row['numero_pedidos_mes'].'</td>

        


                

                
                  <td>         
                 
                  
                  <button class="btn btn-success btn-sm btnModificar" id="btnModificar" onclick="modificarSucursal('.$row['codigo'].')">
                     Editar
                  </button>
                  
                  

                      
                 
                  
                  <button class="btn btn-danger btn-sm btnEliminar" id="btnDelete" onclick="eliminarSucursal('.$row['codigo'].')">
                     Eliminar
                  </button>

                </td>

                </tr>';



              }

                  
                  
                  

                  echo'
                    
                  </tbody>
                </table>
              </div>
            </div>
          ';

?>
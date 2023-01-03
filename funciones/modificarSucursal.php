<?php
   
    include("conectar.php");

   
     $codigo=$_GET["codigo"];  
  
     
     
     $sql="select codigo,nombre_sucursal,nombre_administrador,telefono,direccion,fax,numero_pedidos_mes from sucursal where codigo=".$codigo;

             $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_array($result)) {
       
                
                
                echo '
                 <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Modificar Sucursal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
		<form action="" method="get">
		
		<input type="hidden" id="mcodigo" value="'.$row['codigo'].'" />
                                             
                                              <div id="global"><div>				<label>Nombre Sucursal: </label>
                                 <div >
											<input type="text" class="form-control pull-right"  id="mnombre" value="'.$row['nombre_sucursal'].'" required/>
                                        </div>
				
			
				<label>Administrador: </label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="madministrador"  value="'.$row['nombre_administrador'].'" required/>
                                        </div>
				
				<label>Telefono:</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="mtelefono" value="'.$row['telefono'].'" required/>
                                        </div>
				
				<label>Direccion</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="mdireccion" value="'.$row['direccion'].'" required/>
                                        </div>
				<label>Fax:</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="mfax" value="'.$row['fax'].'" />
                                        </div>
                                        <label>Numero de Pedidos:</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="mpedidos" value="'.$row['numero_pedidos_mes'].'" required/>
                                        </div>
				

		
      </div>
      
      </br>

	  
	  
	  
    </div>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		
        <input type="button" class="btn btn-primary ion-ios7-navigate" value="Modificar" onclick="btnModificar()"  id="btnRecorrido"/>	

		<!--
		<input type="button" class="btn btn-primary ion-ios7-navigate" value="nada" onclick="cerrarse()"  id="btnRecorrido"/>	
		-->
											  
        </form>
  </div>
</div>';
                
                

             
             	
             
             
             }
     


?>
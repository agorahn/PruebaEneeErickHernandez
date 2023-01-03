<div class="container-fluid">

          <!-- Page Heading 
          <h1 class="h3 mb-4 text-gray-800">USER</h1>
          -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

               


            <div class="card-header py-3">

              <div id="title_pedido">
              <h5 class="m-0 font-weight-bold text-primary" >Tabla Sucursales</h5>
	      </div>

	              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

               


	            <div class="input-group" style="padding-top: 10px;">



	              <input type="text" class="form-control bg-light_search border-0 small" id="buscar" style="background-color: #e3e6f0;" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">

	             
	              <div class="input-group-append">
	                <button class="btn btn-primary" type="button" onclick="filtro_usuario()">
	                  <i class="fas fa-arrow-right fa-sm"></i>
	                </button>
	              </div>
                
                <div class="input-group" >
                  <button type="button" class="close" aria-label="Close"  style="margin-left: 15px;" onclick="filtro_usuario_borrar()">
                      <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               
              
               

	            </div>


                
                



	          </form>
	      


              <small class="float-sm-right"> 
                
            
            	  <!--

                  <a class="nav-link" href="#" onclick="$('#dataTable').tableExport({type:'excel',escape:'false'});">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Exportar Excel</span></a>
                    
                     <div class="form-check">
		  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
		  <label class="form-check-label" for="defaultCheck1">
		    Default checkbox
		  </label>
		</div>

                    -->

                    
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Accion
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                    
    

		       <a class="dropdown-item" href="#" onclick="cargars()"><i class="fas fa-fw fa-arrow-circle-up"></i>Refrescar Tabla</a>
		       <a class="dropdown-item" data-toggle="modal" data-target="#myModal3"><i class="fas fa-fw fa-arrow-circle-up"></i>Agregar Sucursal</a>
                     
                      
                    </div>
                
               

              </small>

             
            </div>

            <div id="idTable_sucursal">


            			   <?php   include('./tablas/tablasSucursal.php'); ?>

            </div>
 
           </div>

           <!--trabajando en el modelo de el eliminar si o no-->

           <div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            Message
                        </div>
                        <div class="modal-body">
                            Esta seguro que quiere eliminar la sucursal?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger btn-ok" id="btnModificar" data-id="">Modificar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade"  id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            Message
                        </div>
                        <div class="modal-body">
                            Esta seguro que quiere eliminar la sucursal?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger btn-ok" id="btnDelteYes" data-id="">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            <div id="modificarSucursal">
             <div class="modal fade"  id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            Message
                        </div>
                        <div class="modal-body">
                            Esta seguro que quiere eliminar la sucursal?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger btn-ok" id="btnDelteYes" data-id="">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            
            
            


            <!--Modelo de Mensaje de Guardado con Exito-->
            
            
            
	     <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Crear Sucursal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
		<form action="" method="get">
                                             
                                              <div id="global"><div>				<label>Nombre Sucursal: </label>
                                 <div >
											<input type="text" class="form-control pull-right"  id="nombre" value="" required/>
                                        </div>
				
			
				<label>Administrador: </label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="administrador"  value="" required/>
                                        </div>
				
				<label>Telefono:</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="telefono" value="" required/>
                                        </div>
				
				<label>Direccion</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="direccion" value="" required/>
                                        </div>
				<label>Fax:</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="fax"/>
                                        </div>
                                        <label>Numero de Pedidos:</label>
                                        <div>
                                            <input type="text" class="form-control pull-right" id="pedidos" required/>
                                        </div>
				

		
      </div>
      
      </br>

	  
	  
	  
    </div>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		
        <input type="button" class="btn btn-primary ion-ios7-navigate" value="Guardar" onclick="buttonCheck()"  id="btnRecorrido"/>	

		<!--
		<input type="button" class="btn btn-primary ion-ios7-navigate" value="nada" onclick="cerrarse()"  id="btnRecorrido"/>	
		-->
											  
        </form>
  </div>
</div>
           
          
           


		<script src="./js/jquery_guardar.js"></script>

              <script>

                /*
                    $('#myModal').on('show.bs.modal', function(e) {
                          $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                          
                          $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                     });
                */
                function funcion_mostrar_mensaje()
                {
                  alert("entro");
                  //$("#myModal_save").modal();
                  //document.getElementById("myModal_save").class = "modal fade";
                  document.getElementById('myModal_save').style.display='none';
                  //document.getElementById('myModal_save').style.display='block';
                   
                }

 

            </script>

            

          <!--trabajando en el modelo de el eliminar si o no-->


</div>
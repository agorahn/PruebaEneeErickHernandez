/*
Created Erick S. Hernandez
*/


var nombre,administrador,telefono,direccion,fax,pedidos;
var mcodigo,mnombre,madministrador,mtelefono,mdireccion,mfax,mpedidos;

function btnModificar(){
					
					mcodigo = document.getElementById('mcodigo').value;
					 mnombre = document.getElementById('mnombre').value;
					 
					 madministrador = document.getElementById('madministrador').value;
					 
					 mtelefono = document.getElementById('mtelefono').value;
					 
					 mdireccion = document.getElementById('mdireccion').value;
					 
					 mfax = document.getElementById('mfax').value;
					 
					 mpedidos = document.getElementById('mpedidos').value;
					 
					 
					if(mnombre.length>0 && madministrador.length>0 && mtelefono.length>0 && mdireccion.length>0 && mpedidos.length>0)
					{
						mSucursal();

					    
                    			}
					else{
						alert("Ingrese los campos obligatorios");
					}

					
				}
				

function buttonCheck(){
					
					
					 nombre = document.getElementById('nombre').value;
					 
					 administrador = document.getElementById('administrador').value;
					 
					 telefono = document.getElementById('telefono').value;
					 
					 direccion = document.getElementById('direccion').value;
					 
					 fax = document.getElementById('fax').value;
					 
					 pedidos = document.getElementById('pedidos').value;
					 
					 
					if(nombre.length>0 && administrador.length>0 && telefono.length>0 && direccion.length>0 && pedidos.length>0)
					{
						guardarSucursal();

					    
                    			}
					else{
						alert("Ingrese los campos obligatorios");
					}

					
				}
				
				function guardarSucursal() {
							
				var dataString = 'nombre='+nombre+'&administrador='+administrador+'&telefono='+telefono+'&direccion='+direccion+'&fax='+fax+'&pedidos='+pedidos+'';
	 
				//alert(dataString);
				 $.ajax({
			              type: "GET",
			              url: "./funciones/guardarSucursal.php",
						  data: dataString
						  ,error: function (request, status, error) {
								alert(request.responseText);
							}
		          })
		         .done(function(json) {
						
						alert("Guardado con Exito");
						cargars();
									
				     });
					  
					

            }
            function mSucursal() {
							
				var dataString = 'codigo='+mcodigo+'&nombre='+mnombre+'&administrador='+madministrador+'&telefono='+mtelefono+'&direccion='+mdireccion+'&fax='+mfax+'&pedidos='+mpedidos+'';
	 
				//alert(dataString);
				 $.ajax({
			              type: "GET",
			              url: "./funciones/guardarModificarSucursal.php",
						  data: dataString
						  ,error: function (request, status, error) {
								alert(request.responseText);
							}
		          })
		         .done(function(json) {
						
						alert("Modificado con Exito");
						cargars();
									
				     });
					  
					

            }
            function cargars(){
			//
			
			var dataString = '';
			
			$.ajax({
                        type: "GET",
                        url: "./tablas/tablasSucursal.php",
                        data: dataString,
                        success: function(a) {           
                               
								$('#idTable_sucursal').html(a);
								cerrarse();
								 
								
                        },
						 error: function(xhr, status, error) {
								
                                                     alert(error);
													 alert(status);
													
													 
                            }
                    });
				
			
			
		}
		
		function cerrarse(){ 
							$('#myModal3').modal('hide');
							$('#myModal5').modal('hide');
		}
		function mostrar(){ 
							$('#myModal5').modal('show');
		}
		function eliminarSucursal(codigo) {
							
				var dataString = 'codigo='+codigo+'';
	 
				//alert(dataString);
				 $.ajax({
			              type: "GET",
			              url: "./funciones/eliminarSucursal.php",
						  data: dataString
						  ,error: function (request, status, error) {
								alert(request.responseText);
							}
		          })
		         .done(function(json) {
						
						alert("Eliminado con Exito");
						cargars();
									
				     });
					  
					

            }
            function modificarSucursal(codigo) {
							
				var dataString = 'codigo='+codigo+'';
	 
				//alert(dataString);
				 $.ajax({
                        		type: "GET",
                        		url: "./funciones/modificarSucursal.php",
                        		data: dataString,
                        		success: function(a) { 
                        		   
                               		
						$('#modificarSucursal').html(a);
						$('#myModal5').modal('show');
						

                       			 },
					error: function(xhr, status, error) {
								
                                                     alert(error);
						    alert(status);
													
													 
                            		}
                    });
					  
		

            }
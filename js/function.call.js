function actualizar(objeto,tabla,div)
{
    jQuery.ajax({
        type: "POST",
        url: 'componentes/funciones/actualizador_tablas.php',
        data: {functionname: objeto, arguments: tabla},
    
        success: function(a) { 
								
              $(div).html(a);
        }

    });
}

function fn1 () {
    alert('hola');
}
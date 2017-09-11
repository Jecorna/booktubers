$(document).ready(function(){
    // Evento que se ejecuta al seleccionar un pais
    $("#pais").change(function(){
        var value = $(this).val();        
        $("#ciudad").removeAttr('disabled');
        $.post('funciones/funciones.php', { idpais: value}, function(data,status){
            document.getElementById("ciudad").innerHTML = data;
        }); 
    });
});

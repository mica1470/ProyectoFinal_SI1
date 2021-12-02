 $(buscar_dat());
function buscar_dat(consulta){
    $.ajax({
        url:'../notificacion.php',
        type:'POST',
        dataType: 'html',
        data:{consulta:consulta},
     })

     .done(function(respuesta){
         $("#notificaciones").html(respuesta);
     })
     .fail(function(){
         console.log("error");

     })
}
$(document).on ('click', '#notificaciones',function(){
    var valor =$(this).val();
    if(valor != ""){
        buscar_dat(valor);

    } else{
        buscar_dat();
    }

});
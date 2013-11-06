$(document).ready(function(){Buscar_Comentario();});

function Cerrar_Comentario(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#com_oculto").html("");
		}
	}); 
};

function Paaginar(var_div, url){
	var div = $("#" + var_div);
	$(div).load(url);
}

function Comentario(Id,Accion){  
    var str=Id+' '+Accion;
    var msj;
    var query;
    
    if(Accion=='Eliminar'){
        msj="¿Esta seguro de eliminar el comentario?";
        query="DELETE FROM tblComentarios WHERE IdComentario="+Id;
        }
    else{
        if(Accion=='Aprobado'){
            msj="¿Seguro de aprobar el mensaje?";
            query="UPDATE tblComentarios SET Aprobado='Aprobado' WHERE IdComentario="+Id;
        }
        else{
            msj="¿Seguro de desaprobar el mensaje?";
            query="UPDATE tblComentarios SET Aprobado='No Aprobado' WHERE IdComentario="+Id;
        }
    }
    if (confirm(msj)){
        $.ajax({
            url: '../Model/comentarios/Com_Eliminar.php',
            data: 'Accion='+query,
            type: 'post',
            success: function(data){
            if(data!="")
                alert(data);
            Buscar_Comentario();
            }
        });
    }
}

function Buscar_Comentario(){
	var str = $("#BComentario").serialize();
	$.ajax({
		url: '../View/Com_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Comentario").html(data);
		}
	});
}
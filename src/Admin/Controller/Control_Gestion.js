// JavaScript Document

$(document).ready(function(){
        Buscar_Gestion();
});

function Cerrar(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#div_oculto").html("");
		}
	}); 
};

function Modificar_Gestion($Gestion){
	$("#div_oculto").load("../View/Ges_Update.php", {IdGestion: $Gestion}, function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};
function Mostrar_Gestion($Gestion){
	$("#div_oculto").load("../View/Ges_Mostrar.php", {IdGestion: $Gestion}, function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Paginar(var_div, url){
	var div = $("#" + var_div);
	$(div).load(url);
	/*
	div.fadeOut("fast", function(){
		$(div).load(url, function(){
			$(div).fadeIn("fast");
		});
	});
	*/
}

function Buscar_Gestion(){
	var str = $("#FBuscar").serialize();
	$.ajax({
		url: '../View/Ges_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Listado").html(data);
		}
	});
}
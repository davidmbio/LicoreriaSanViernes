$(document).ready(function(){Buscar_Gestion();});

function Cerrar_Gestion(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#ges_oculto").html("");
		}
	}); 
};

function Modificar_Gestion($Gestion){
	$("#ges_oculto").load("../View/Ges_Update.php", {IdGestion: $Gestion}, function(){
		$.blockUI({
			message: $('#ges_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};
function Mostrar_Gestion($Gestion){
	$("#ges_oculto").load("../View/Ges_Mostrar.php", {IdGestion: $Gestion}, function(){
		$.blockUI({
			message: $('#ges_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Paginar(var_div, url){
	var div = $("#" + var_div);
	$(div).load(url);
}

function Buscar_Gestion(){
	var str = $("#BGestion").serialize();
	$.ajax({
		url: '../View/Ges_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Gestion").html(data);
		}
	});
}
// JavaScript Document

$(document).ready(function(){Buscar_Promocion();});

function Cerrar_Promocion(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#div_oculto").html("");
		}
	}); 
};

function Agregar_Promocion(){
	$("#promo_oculto").load("../View/Promo_Add.php", function(){
		$.blockUI({
			message: $('#promo_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Promocionar_por($Id,$Tipo){
	$("#promo_oculto").load("../View/Promocionar_Add.php", {Id: $Id, Tipo: $Tipo}, function(){
		$.blockUI({
			message: $('#promo_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Promocion($Promocion){
	$("#promo_oculto").load("../View/Promo_Update.php", {IdPromocion: $Promocion}, function(){
		$.blockUI({
			message: $('#promo_oculto'),
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

function Eliminar_Promocion(ide_promocion){
	var respuesta = confirm("Desea eliminar a esta persona?");
	if (respuesta){
		$.ajax({
			url: '../Model/promocion/Promo_Eliminar.php',
			data: 'IdPromocion=' + ide_promocion,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
                                Buscar_Promocion();
			}
		});
	}
}

function Buscar_Promocion(){
	var str = $("#BPromocion").serialize();
	$.ajax({
		url: '../View/Promo_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Promocion").html(data);
		}
	});
}
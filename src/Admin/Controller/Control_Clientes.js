// JavaScript Document

$(document).ready(function(){
	Buscar();
	$("#grilla tbody tr").mouseover(function(){
		$(this).addClass("over");
	}).mouseout(function(){
		$(this).removeClass("over");
	});
});

function Cerrar(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#div_oculto").html("");
		}
	}); 
};

function Agregar_Cliente(){
	$("#div_oculto").load("../View/Clie_Add.php", function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Cliente($Cliente){
	$("#div_oculto").load("../View/Clie_Update.php", {IdCliente: $Cliente}, function(){
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

function Eliminar_Cliente(ide_cliente){
	var respuesta = confirm("Desea eliminar a esta persona?");
	if (respuesta){
		$.ajax({
			url: '../Model/cliente/Clie_Eliminar.php',
			data: 'IdCliente=' + ide_cliente,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
				Buscar()
			}
		});
	}
}

function Buscar(){
	var str = $("#FBuscar").serialize();
	$.ajax({
		url: '../View/Clie_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Listado").html(data);
		}
	});
}
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

function Agregar_Categoria(){
	$("#div_oculto").load("../View/Cat_Add.php", function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Categoria($Categoria){
	$("#div_oculto").load("../View/Cat_Update.php", {IdCategoria: $Categoria}, function(){
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

function Eliminar_Categoria(ide_ccategoria){
	var respuesta = confirm("Desea eliminar a esta persona?");
	if (respuesta){
		$.ajax({
			url: '../Model/categoria/Cat_Eliminar.php',
			data: 'IdCategoria=' + ide_ccategoria,
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
		url: '../View/Cat_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Listado").html(data);
		}
	});
}
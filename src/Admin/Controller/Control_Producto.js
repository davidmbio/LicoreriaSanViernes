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

function Agregar_Producto(){
	$("#div_oculto").load("../View/Pro_Add.php", function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Producto($Producto){
	$("#div_oculto").load("../View/Pro_Update.php", {IdProducto: $Producto}, function(){
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

function Eliminar_Producto(ide_per){
	var respuesta = confirm("¿Desea eliminar a esta persona?");
	if (respuesta){
		$.ajax({
			url: '../Model/producto/Pro_Eliminar.php',
			data: 'IdProducto=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
				Buscar();
			}
		});
	}
}

function Buscar(){
	var str = $("#FBuscar").serialize();
	$.ajax({
		url: '../View/Pro_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Listado").html(data);
		}
	});
}
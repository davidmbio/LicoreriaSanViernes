$(document).ready(function(){Buscar_Categoria();});

function Cerrar_Categoria(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#cat_oculto").html("");
		}
	}); 
};

function Agregar_Categoria(){
	$("#cat_oculto").load("../View/Cat_Add.php", function(){
		$.blockUI({
			message: $('#cat_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Categoria($Categoria){
	$("#cat_oculto").load("../View/Cat_Update.php", {IdCategoria: $Categoria}, function(){
		$.blockUI({
			message: $('#cat_oculto'),
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

function Eliminar_Categoria(ide_ccategoria){
	var respuesta = confirm("¿Esta seguro de eliminar la información de la categoría?");
	if (respuesta){
		$.ajax({
			url: '../Model/categoria/Cat_Eliminar.php',
			data: 'IdCategoria=' + ide_ccategoria,
			type: 'post',
			success: function(data){
				if(data!="")
					alert('No se puede eliminar, Hay productos en esta categoría');
				Buscar_Categoria();
			}
		});
	}
}

function Buscar_Categoria(){
	var str = $("#BCategoria").serialize();
	$.ajax({
		url: '../View/Cat_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Categoria").html(data);
		}
	});
}
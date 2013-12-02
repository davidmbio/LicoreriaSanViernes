$(document).ready(function(){Buscar_Producto();});

function Cerrar_Producto(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#prod_oculto").html("");
		}
	}); 
};

function Agregar_Producto(){
	$("#prod_oculto").load("../View/Pro_Add.php", function(){
		$.blockUI({
			message: $('#prod_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

 function Agrega_Imagenes($Producto){
	$("#prod_oculto").load("../View/Pro_Upload.php", {IdProducto: $Producto}, function(){
		$.blockUI({
			message: $('#prod_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

 function Modificar_Producto($Producto){
	$("#prod_oculto").load("../View/Pro_Update.php", {IdProducto: $Producto}, function(){
		$.blockUI({
			message: $('#prod_oculto'),
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

function Eliminar_Producto(ide_per){
	var respuesta = confirm("¿Realmente esta seguro de eliminar la información del producto?");
	if (respuesta){
		$.ajax({
			url: '../Model/producto/Pro_Eliminar.php',
			data: 'IdProducto=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
                                    Buscar_Producto();
			}
		});
	}
}

function Buscar_Producto(){
	var str = $("#BProducto").serialize();
	$.ajax({
		url: '../View/Pro_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Productos").html(data);
		}
	});
}
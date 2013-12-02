$(document).ready(function(){Buscar_Cientes();});

function Cerrar_Cliente(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#clie_oculto").html("");
		}
	}); 
};

function Agregar_Cliente(){
	$("#clie_oculto").load("../View/Clie_Add.php", function(){
		$.blockUI({
			message: $('#clie_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Cliente($Cliente){
	$("#clie_oculto").load("../View/Clie_Update.php", {IdCliente: $Cliente}, function(){
		$.blockUI({
			message: $('#clie_oculto'),
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

function Eliminar_Cliente(ide_cliente){
	var respuesta = confirm("¿Esta seguro de eliminar la información del cliente?");
	if (respuesta){
		$.ajax({
			url: '../Model/cliente/Clie_Eliminar.php',
			data: 'IdCliente=' + ide_cliente,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
                                    
                                Buscar_Cientes()
			}
		});
	}
}

function Buscar_Cientes(){
	var str = $("#BClientes").serialize();
	$.ajax({
		url: '../View/Clie_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Clientes").html(data);
		}
	});
}
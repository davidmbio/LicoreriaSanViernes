$(document).ready(function(){Buscar_Empleados();});

function Cerrar_Empleado(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#emp_oculto").html("");
		}
	}); 
};

function Agregar_Empleado(){
	$("#emp_oculto").load("../View/Emp_Add.php", function(){
		$.blockUI({
			message: $('#emp_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function Modificar_Empleado($Empleado){
	$("#emp_oculto").load("../View/Emp_Update.php", {IdEmpleado: $Empleado}, function(){
		$.blockUI({
			message: $('#emp_oculto'),
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

function Eliminar_Empleado(ide_per){
	var respuesta = confirm("Desea eliminar a esta persona?");
	if (respuesta){
		$.ajax({
			url: '../Model/empleado/Emp_Eliminar.php',
			data: 'IdEmpleado=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
				Buscar_Empleados();
			}
		});
	}
}

function Buscar_Empleados(){
	var str = $("#BEmpleado").serialize();
	$.ajax({
		url: '../View/Emp_Lista.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#Empleados").html(data);
                }
	});        
}
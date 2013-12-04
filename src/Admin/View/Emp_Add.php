<?php
	include "../Model/conexion.php";
?>

<form action="javascript: Agregar_Emp();" method="post" id="FEmpleado" class="modal fade in" >  
    <div class="alert alert-info"><h4>Registrar nuevo Empleado</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" type="text" id="Nombre" placeholder="Nombre del empleado" class="required wide text input" />
        </li>        
        <li class="field">
            <label class="inline">Apellidos:</label>
            <input name="Apellidos" type="text" id="Apellidos" placeholder="Apellidos del empleado" class="required wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Telefono:</label>
            <input name="Telefono" type="text" id="Telefono" class="required number wide text input" maxlength="10" placeholder="N&uacute;mero de tel&eacute;fono" />
        </li>
        <li class="field">
            <label class="inline">Email:</label>
            <input name="Email" type="text" id="Email" placeholder="Correo electr&oacute;nico" class="required email wide input" />
        </li>
        <li class="field">
            <label class="inline">Nacimiento:</label>
            <input name="Nacimiento" type="text" id="Nacimiento" placeholder="F. Nacimiento (1992-12-12)" class="required dateISO wide input" /> 
            
        </li>
        <li class="field">
            <label class="inline">Usuario:</label>
            <input name="Usuario" type="text" id="Usuario" placeholder="Nombre de usuario para el empleado" class="required wide input" />
        </li>
        <li class="field">
            <label class="inline">Contrase&ntilde;a:</label>
            <input name="Password" type="password" id="Password" placeholder="Contrase&ntilde;a para el empleado" class="required wide input" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Empleado();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FEmpleado").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "../Model/empleado/Emp_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente registrar un nuevo Empleado?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Agregar_Emp(){
		var str = $("#FEmpleado").serialize();
		$.ajax({
			url: '../Model/empleado/Emp_Agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Empleado();
				Buscar_Empleados();
			}
		});
	};
</script>
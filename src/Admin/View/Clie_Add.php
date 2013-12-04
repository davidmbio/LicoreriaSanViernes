<?php
	include "../Model/conexion.php";
?>

<form action="javascript: Agregar_Clie();" method="post" id="FCliente" class="modal fade in" >  
    <div class="alert alert-info"><h4>Registrar un nuevo cliente</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" type="text" id="Nombre" placeholder="Nombre del cliente" class="required wide text input" />
        </li>        
        <li class="field">
            <label class="inline">Apellidos:</label>
            <input name="Apellidos" type="text" id="Apellidos" placeholder="Apellidos del cliente" class="required wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Telefono:</label>
            <input name="Telefono" type="text" id="Telefono" class="required number maxlength wide text input" maxlength="10" placeholder="Teléfono con 10 digitos" />
        </li>
        <li class="field">
            <label class="inline">Email:</label>
            <input name="Email" type="text" id="Email" placeholder="Correo electronico (ejemplo@gmil.com)" class="required email wide input" />
        </li>
        <li class="field">
            <label class="inline">Nacimiento:</label>
            <input name="Nacimiento" type="text" id="Nacimiento" placeholder="F. Nacimiento ejem: 1992-12-12" class="required dateISO wide input" />
        </li>
        <li class="field">
            <label class="inline">Usuario:</label>
            <input name="Usuario" type="text" id="Usuario" placeholder="Nombre de usuario para el cliente" class="required wide input" />
        </li>
        <li class="field">
            <label class="inline">Contrase&ntilde;a:</label>
            <input name="Password" type="password" id="Password" placeholder="Contrase&ntilde;a para el cliente" class="required wide input" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Cliente();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FCliente").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "../Model/cliente/Clie_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente registrar este nuevo cliente?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Agregar_Clie(){
		var str = $("#FCliente").serialize();
		$.ajax({
			url: '../Model/cliente/Clie_Agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Cliente();
                                Buscar_Cientes();
			}
		});
	};
</script>
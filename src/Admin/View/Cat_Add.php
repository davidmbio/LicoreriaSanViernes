<?php
	include "../Model/conexion.php";
?>

<form action="javascript: Agregar_Cat();" method="post" id="FCategoria" class="modal fade in" >  
    <div class="alert alert-info"><h4>Registrar nueva categor&iacute;</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Categoria" type="text" id="Categoria" placeholder="Nombre de la categor&iacute;a" class="required wide text input" />
        </li>        
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Categoria();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FCategoria").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "../Model/categoria/Cat_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente agregar la nueva Categoría?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Agregar_Cat(){
		var str = $("#FCategoria").serialize();
		$.ajax({
			url: '../Model/categoria/Cat_Agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Categoria();
				Buscar_Categoria();
			}
		});
	};
</script>
<?
	include "../Model/conexion.php";
?>

<form action="javascript: Agregar_Cat();" method="post" id="FCategoria" class="modal fade in" >  
    <div class="alert alert-info"><h4>Agregar nuevo Empleado</h4></div>
    <ul style="margin: 10px;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Categoria" type="text" id="Categoria" placeholder="Nombre de la categoria" class="required wide text input" />
        </li>        
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar();" />
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
				var respuesta = confirm('\xBFDesea realmente agregar este nuevo empleado?')
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
				Cerrar();
				Buscar();
			}
		});
	};
</script>
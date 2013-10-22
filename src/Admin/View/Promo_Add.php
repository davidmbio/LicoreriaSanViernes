<?
	include "../Model/conexion.php";
?>

<form action="javascript: Agregar_Promo();" method="post" id="FPromocion" class="modal fade in" >  
    <div class="alert alert-info"><h4>Agregar nueva promocion</h4></div>
    <ul style="margin: 10px;">
        <li class="field">
            <label class="inline">Titulo:</label>
            <input name="Titulo" type="text" id="Titulo" placeholder="Titulo de la promocion" class="required wide text input" />
        </li>        
        <li class="field">
            <label class="inline">Descripcion:</label>
            <input name="Descripcion" type="text" id="Descripcion" placeholder="Descripcion de la promocion" class="required wide input textarea" />
        </li>       
        <li class="field">
            <label class="inline">F. Inicial:</label>
            <input name="FInicio" type="text"  id="FInicio" placeholder="Inicio del promocion" class="required wide text input" />
        </li>        
        <li class="field">
            <label class="inline">F. Final:</label>
            <input name="FFinal" type="text" id="FFinal" placeholder="Final de la promocion" class="required wide text input" />
        </li>
        <li class="field">
            <label class="inline">Descuento:</label>
            <input name="Descuento" type="text" id="Descuento" placeholder="Descuento de la promocion" class="required wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Imagen:</label>
            <input name="Ruta" type="text" id="Ruta" class="required wide text input" placeholder="Ruta de la promocion" />
        </li>        
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FPromocion").validate({
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente agregar a esta nueva persona?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Agregar_Pro(){
		var str = $("#FPromocion").serialize();
		$.ajax({
			url: '../Model/promocion/Promo_Agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
                                    
				Cerrar();
				Buscar();
			}
		});
	};
</script>
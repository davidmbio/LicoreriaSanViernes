<?
	if(empty($_POST['IdPromocion'])){
		echo "Por favor no altere el fuente";
		exit;
	}
        

	include "../Model/basico.php";
	include "../Model/conexion.php";

	$sql = sprintf("select * from tblPromocion where IdPromocion=%d",
		(int)$_POST['IdPromocion']
	);
	$promo = mysql_query($sql);
	$num_rs_promo = mysql_num_rows($promo);
	
        if ($num_rs_promo==0){
		echo "No existen personas con ese IDE";
                exit;
	}
	
	$rs_promo = mysql_fetch_assoc($promo);
	
?>
<form action="javascript: Modificar_Promo();" method="post" id="FPromocion" class="modal fade in" >  
    <input type="hidden" id="IdPromocion" name="IdPromocion" value="<?=$rs_promo['IdPromocion']?>" />
    <div class="alert alert-info"><h4>Modificar Promocion</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Titulo:</label>
            <input name="Titulo" value="<? echo $rs_promo['Titulo']; ?>" type="text" id="Titulo" placeholder="Titulo de la promocion" class="required wide text input" />
        </li>        
        <li class="field">
            <label class="inline">Descripcion:</label>
            <input name="Descripcion" type="text" id="Descripcion" value="<? echo $rs_promo['Descripcion']; ?>" placeholder="Descripcion de la promocion" class="required wide input textarea" />
        </li>       
        <li class="field">
            <label class="inline">F. Final:</label>
            <input name="FFinal" value="<? echo $rs_promo['Fin']; ?>" type="text" id="FFinal" placeholder="Final de la promocion" class="required wide text input" />
        </li>
        <li class="field">
            <label class="inline">Descuento:</label>
            <input name="Descuento" value="<? echo $rs_promo['Descuento']; ?>" type="text" id="Descuento" placeholder="Descuento de la promocion" class="required wide text input" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Promocion();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FPromocion").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar a esta nueva persona?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Promo(){
		var str = $("#FPromocion").serialize();
		$.ajax({
			url: '../Model/promocion/Promo_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Promocion();
				Buscar_Promocion();
			}
		});
	};
</script>
<?
	if(empty($_POST['IdGestion'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";

	$sql = sprintf("select * from tblGestion where IdGestion=%d",
		(int)$_POST['IdGestion']
	);
	$gest = mysql_query($sql);
	$num_rs_gest= mysql_num_rows($gest);
	
        if ($num_rs_gest==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_gest = mysql_fetch_assoc($gest);
	
?>
<form action="javascript: Modificar_Ges();" method="post" id="FGestion" class="modal fade in" >  
    <input type="hidden" id="IdCategoria" name="IdGestion" value="<?=$rs_gest['IdGestion']?>" />
    <div class="alert alert-info"><h4>Modificar producto</h4></div>
    <ul style="margin: 10px;">                
        <li class="field">
            <label class="inline">Mision:</label>
            <input name="Mision" value="<?=$rs_gest['Mision']?>" type="text" id="Mision" placeholder="Mision de la empresa" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Vision:</label>
            <input name="Vision" value="<?=$rs_gest['Vision']?>" type="text" id="Vision" placeholder="Vision de la empresa" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Telefono:</label>
            <input name="Telefono" value="<?=$rs_gest['Telefono']?>" type="text" id="Telefono" placeholder="Telefono de la empresa" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Email:</label>
            <input name="Email" value="<?=$rs_gest['Email']?>" type="text" id="Email" placeholder="Email de la empresa" class="requisssred wide text input" />
        </li>           
        </li>           
        <li class="field">
            <label class="inline">Direccion:</label>
            <input name="Direccion" value="<?=$rs_gest['Direccion']?>" type="text" id="Direccion" placeholder="Direccion de la empresa" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Valores:</label>
            <input name="Valores" value="<?=$rs_gest['Valores']?>" type="text" id="Valores" placeholder="Valores de la empresa" class="requisssred wide text input" />
        </li>           
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FGestion").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar esta categoria?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Ges(){
		var str = $("#FGestion").serialize();
		$.ajax({
			url: '../Model/gestion/Ges_Modificar.php',
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
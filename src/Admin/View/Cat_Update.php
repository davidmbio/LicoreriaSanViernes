<?
	if(empty($_POST['IdCategoria'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";

	$sql = sprintf("select * from tblCategorias where IdCategoria=%d",
		(int)$_POST['IdCategoria']
	);
	$cate = mysql_query($sql);
	$num_rs_cate= mysql_num_rows($cate);
	
        if ($num_rs_cate==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_cate = mysql_fetch_assoc($cate);
	
?>
<form action="javascript: Modificar_Cat();" method="post" id="FCategoria" class="modal fade in" >  
    <input type="hidden" id="IdCategoria" name="IdCategoria" value="<?=$rs_cate['IdCategoria']?>" />
    <div class="alert alert-info"><h4>Modificar producto</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Categoria:</label>
            <input name="Categoria" value="<?=$rs_cate['Categoria']?>" type="text" id="Categoria" placeholder="Nombre de la categoria" class="requisssred wide text input" />
        </li>           
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Categoria();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FCategoria").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar esta categoria?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Cat(){
		var str = $("#FCategoria").serialize();
		$.ajax({
			url: '../Model/categoria/Cat_Modificar.php',
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
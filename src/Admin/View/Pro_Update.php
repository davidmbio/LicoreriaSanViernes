<?php
	if(empty($_POST['IdProducto'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";

	$query = sprintf("select * from tblProductos where IdProducto=%d",
		(int)$_POST['IdProducto']
	);
	$pro = mysql_query($query);
	$num_rs_pro = mysql_num_rows($pro);
	
        if ($num_rs_pro==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_pro = mysql_fetch_assoc($pro);
	
?>
<form action="javascript: Modificar_Pro();" method="post" id="FProducto" class="modal fade in" >  
    <input type="hidden" id="IdProducto" name="IdProducto" value="<?php echo $rs_pro['IdProducto']?>" />
    <div class="alert alert-info"><h4>Modificar informaci&oacute;n de producto</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Categoria:</label>
            <select name="IdCategoria" ide="IdCategoria" class="required wide text input">
                <option value="Elije un opcion"></option><?php
                    $query = "select * from tblCategorias order by Categoria asc";
                    $PromoCategoria = mysql_query($query);
                    while($rs_cat = mysql_fetch_assoc($PromoCategoria)){?>
                    <option value="<?php echo $rs_pro['IdCategoria']?>" <?php if($rs_cat['IdCategoria']==$rs_pro['IdCategoria']) echo "selected='selected'";?>><?php echo $rs_cat['Categoria']?></option>
                    <?php } ?>
            </select>
	</li>
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" id="Nombre" value="<?php echo $rs_pro['Nombre']?>" type="text" id="Descripcion" placeholder="Nombre del producto" class="required wide text input" />
        </li>   
        
        <li class="field">
            <label class="inline">Descripcion:</label>
            <input name="Descripcion" id="Descripcion" value="<?php echo $rs_pro['Descripcion']?>" type="text" id="Descripcion" placeholder="Descripcion del producto" class="requisssred wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Precio:</label>
            <input name="Precio" type="text" id="Precio" class="required number wide text input" maxlength="5" value="<?php echo $rs_pro['Precio']?>" placeholder="Precio del producto" />           
        </li>        
        <li class="field">
            <label class="inline">Caducidad:</label>
            <input name="Caducidad" type="text" id="Caducidad" placeholder="Caducidad del producto" maxlength="10" class="required dateISO wide input" value="<?php echo $rs_pro['Caducidad']?>" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Producto();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FProducto").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar la información del producto?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Pro(){
		var str = $("#FProducto").serialize();
		$.ajax({
			url: '../Model/producto/Pro_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Producto();
				Buscar_Producto();
			}
		});
	};
</script>
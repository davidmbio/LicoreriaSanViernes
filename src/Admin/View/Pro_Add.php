<?php
	include "../Model/conexion.php";
?>

<form action="javascript: Agregar_Pro();" method="POST" id="FProducto" class="modal fade in" enctype="multipart/form-data" >  
    <div class="alert alert-info"><h4>Registrar nuevo producto</h4></div>
    <ul style="padding-right: 50px; text-align: right;">
       <li class="field">
         <label class="inline">Categoria:</label>
         <select name="IdCategoria" id="IdCategoria" class="required wide text input">
            <option value=""></option><?php
                $query = "select * from tblCategorias order by Categoria asc";
                $PromoCategoria = mysql_query($query);
                while($rs_cat = mysql_fetch_assoc($PromoCategoria)){?>
            <option value="<?php echo $rs_cat['IdCategoria']?>"><?php echo $rs_cat['Categoria']?></option>
                <?php } ?>
         </select>
	</li>
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" type="text" id="Nombre" placeholder="Nombre del producto" class="required wide text input" />
        </li>        
        <li class="field">
            <label class="inline">Descripcion:</label>
            <input name="Descripcion" type="text" id="Descripcion" placeholder="Descripcion del producto" class="required wide input textarea" />
        </li>
        
        <li class="field">
            <label class="inline">Precio:</label>
            <input name="Precio" type="text" id="Precio" class="required number wide text input" placeholder="Precio del producto" />
        </li>        
        <li class="field">
            <label class="inline">Caducidad:</label>
            <input name="Caducidad" type="text" id="Caducidad" placeholder="Fecha de Caducidad (2020-12-12)" class="required dateISO wide input" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Producto();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FProducto").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "../Model/producto/Pro_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente registrar el nuevo producto?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Agregar_Pro(){
		var str = $("#FProducto").serialize();
		$.ajax({
			url: '../Model/producto/Pro_Agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				    
				Cerrar_Producto();
				Buscar_Producto();
			}
		});
	};
</script>
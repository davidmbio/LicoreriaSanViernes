<?php
	if(empty($_POST['IdCliente'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";
        include '../Model/Encriptation.php';

	$query = sprintf("select * from tblClientes where IdCliente=%d",
		(int)$_POST['IdCliente']
	);
	$clie = mysql_query($query);
	$num_rs_clie = mysql_num_rows($clie);
	
        if ($num_rs_clie==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_clie = mysql_fetch_assoc($clie);
	
?>
<form action="javascript: Modificar_Clie();" method="post" id="FCliente" class="modal fade in" >  
    <input type="hidden" id="IdCliente" name="IdCliente" value="<?php echo $rs_clie['IdCliente']?>" />
    <div class="alert alert-info"><h4>Modificar datos del cliente</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" value="<?php echo $rs_clie['Nombre']?>" type="text" id="Nombre" placeholder="Nombre del empleado" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Apellidos:</label>
            <input name="Apellidos" value="<?php echo $rs_clie['Apellidos']?>" type="text" id="Apellidos" placeholder="Apellidos del empleado" class="requisssred wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Telefono:</label>
            <input name="Telefono" type="text" id="Telefono" class="required wide text input" value="<?php echo $rs_clie['Telefono']?>" placeholder="Numero de telefono" />
        </li>
        <li class="field">
            <label class="inline">Email:</label>
            <input name="Email" type="text" id="Email" placeholder="Correo electronico" class="required email wide input" value="<?php echo $rs_clie['Email']?>" />
        </li>
        <li class="field">
            <label class="inline">Nacimiento:</label>
            <input name="Nacimiento" type="text" id="Nacimiento" placeholder="Fecha de nacimiento" class="required wide input" value="<?php echo $rs_clie['Nacimiento']?>" />
        </li>
        <li class="field">
            <label class="inline">Usuario:</label>
            <input type="text"  placeholder="<?php echo getDecrypted($rs_clie['Usuario'])?>" class="required wide input" disabled="disabled"/>

        </li>
        <li class="field">
            <label class="inline">Contrase&ntilde;a:</label>
            <input name="Password" type="password" id="Password" placeholder="Contrase&ntilde;a para el cliente" class="required wide input" value="<?=getDecrypted($rs_clie['Password'])?>" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Cliente();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FCliente").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFREsta seguro de modificar la informacion del cliente?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Clie(){
		var str = $("#FCliente").serialize();
		$.ajax({
			url: '../Model/cliente/Clie_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Cliente();   
                                Buscar_Cientes()
			}
		});
	};
</script>
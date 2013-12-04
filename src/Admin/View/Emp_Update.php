<?php
	if(empty($_POST['IdEmpleado'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";
        include '../Model/Encriptation.php';

	$query = sprintf("select * from tblEmpleados where IdEmpleado=%d",
		(int)$_POST['IdEmpleado']
	);
	$per = mysql_query($query);
	$num_rs_per = mysql_num_rows($per);
	
        if ($num_rs_per==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_per = mysql_fetch_assoc($per);
	
?>
<form action="javascript: Modificar_Emp();" method="post" id="FEmpleado" class="modal fade in" >  
    <input type="hidden" id="IdEmpleado" name="IdEmpleado" value="<?php echo $rs_per['IdEmpleado']?>" />
    <div class="alert alert-info"><h4>Modificaci&oacute;n de datos</h4></div>
    <ul style="padding-right: 50px; text-align: right;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" value="<?php echo $rs_per['Nombre']?>" type="text" id="Nombre" placeholder="Nombre del empleado" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Apellidos:</label>
            <input name="Apellidos" value="<?php echo $rs_per['Apellidos']?>" type="text" id="Apellidos" placeholder="Apellidos del empleado" class="requisssred wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Telefono:</label>
            <input name="Telefono" type="text" id="Telefono" class="required number wide text input" maxlength="10" value="<?php echo $rs_per['Telefono']?>" placeholder="Numero de telefono" />
        </li>
        <li class="field">
            <label class="inline">Email:</label>
            <input name="Email" type="text" id="Email" placeholder="Correo electronico" class="required email wide input" value="<?php echo $rs_per['Email']?>" />
        </li>
        <li class="field">
            <label class="inline">Nacimiento:</label>
            <input name="Nacimiento" type="text" id="Nacimiento" placeholder="Fecha de nacimiento" maxlength="10" class="required dateISO wide input" value="<?php echo $rs_per['Nacimiento']?>" />
        </li>
        <li class="field">
            <label class="inline">Usuario:</label>
            <input type="text"  placeholder="<?php echo getDecrypted($rs_per['Usuario'])?>" class="required wide input" disabled="disabled"/>
        </li>
        <li class="field">
            <label class="inline">Contrase&ntilde;a:</label>
            <input name="Password" type="password" id="Password" placeholder="Nombre de usuario del empleado" class="required wide input" value="<?php echo getDecrypted($rs_per['Password'])?>" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Empleado();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FEmpleado").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar los datos del Empleado?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Emp(){
		var str = $("#FEmpleado").serialize();
		$.ajax({
			url: '../Model/empleado/Emp_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Empleado();
				Buscar_Empleados();
			}
		});
	};
</script>
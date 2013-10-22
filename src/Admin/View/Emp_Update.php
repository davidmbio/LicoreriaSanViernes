<?
	if(empty($_POST['IdEmpleado'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";

	$sql = sprintf("select * from tblEmpleados where IdEmpleado=%d",
		(int)$_POST['IdEmpleado']
	);
	$per = mysql_query($sql);
	$num_rs_per = mysql_num_rows($per);
	
        if ($num_rs_per==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_per = mysql_fetch_assoc($per);
	
?>
<form action="javascript: Modificar_Emp();" method="post" id="FEmpleado" class="modal fade in" >  
    <input type="hidden" id="IdEmpleado" name="IdEmpleado" value="<?=$rs_per['IdEmpleado']?>" />
    <div class="alert alert-info"><h4>Modificar producto</h4></div>
    <ul style="margin: 10px;">                
        <li class="field">
            <label class="inline">Nombre:</label>
            <input name="Nombre" value="<?=$rs_per['Nombre']?>" type="text" id="Nombre" placeholder="Nombre del empleado" class="requisssred wide text input" />
        </li>           
        <li class="field">
            <label class="inline">Apellidos:</label>
            <input name="Apellidos" value="<?=$rs_per['Apellidos']?>" type="text" id="Apellidos" placeholder="Apellidos del empleado" class="requisssred wide text input" />
        </li>
        
        <li class="field">
            <label class="inline">Telefono:</label>
            <input name="Telefono" type="text" id="Telefono" class="required wide text input" value="<?=$rs_per['Telefono']?>" placeholder="Numero de telefono" />
        </li>
        <li class="field">
            <label class="inline">Email:</label>
            <input name="Email" type="text" id="Email" placeholder="Correo electronico" class="required email wide input" value="<?=$rs_per['Email']?>" />
        </li>
        <li class="field">
            <label class="inline">Nacimiento:</label>
            <input name="Nacimiento" type="text" id="Nacimiento" placeholder="Fecha de nacimiento" class="required wide input" value="<?=$rs_per['Nacimiento']?>" />
        </li>
        <li class="field">
            <label class="inline">Usuario:</label>
            <label class="inline"><strong><?=$rs_per['Usuario']?></strong></label>
        </li>
        <li class="field">
            <label class="inline">Contrase&ntilde;a:</label>
            <input name="Password" type="text" id="Password" placeholder="Nombre de usuario del empleado" class="required wide input" value="<?=$rs_per['Password']?>" />
        </li>
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FEmpleado").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar este empleado?')
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
				Cerrar();
				Buscar();
			}
		});
	};
</script>
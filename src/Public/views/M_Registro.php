<?php
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Registro');
$temp->set('header', 'Informacion personal');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','
<form action="javascript: Modificar_Clie();" method="post" id="FCliente" class="modal fade in" >  
    <div class="alert alert-info"><h4>Modificar mi informacion</h4></div>
    <ul style="padding-right: 50px; text-align: center;">                
            <input type="hidden" id="IdCliente" name="IdCliente" value="'.$_SESSION['IdUser'].'" />
            <input name="Nombre" type="text" id="Nombre" value="'.$_SESSION['UserName'].'" placeholder="Nombre" class="input text" />
            <input name="Apellidos" type="text" id="Apellidos" value="'.$_SESSION['UserApellidos'].'" placeholder="Tus apellidos" class="required wide text input" />
            <input name="Telefono" type="text" id="Telefono" value="'.$_SESSION['UserTelefono'].'" class="required wide text input" placeholder="Tu numero de telefono" />
            <input name="Email" type="text" id="Email" value="'.$_SESSION['UserEmail'].'" placeholder="Tu correo electronico" class="required email wide input" />
            <input name="Nacimiento" type="text" id="Nacimiento" value="'.$_SESSION['UserNacimiento'].'" placeholder="Tu fecha de nacimiento" class="required wide input" />
            <input name="Usuario" type="text" id="Usuario" value="'.$_SESSION['UserUsuario'].'" placeholder="Un nombre de usuario " class="required wide input" disabled="disabled" />
            <input name="Password" type="text" id="Password" value="'.$_SESSION['UserPass'].'" placeholder="Una contrase&ntilde;a" class="required wide input" disabled="disabled"  />        
            <input name="Password2" type="text" id="Password2" placeholder="Cambiar contrase&ntilde;a" class="required wide input" />        
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="history.back();" />
    </div>
</form>  
');
$temp->set('En_Promocion', En_Promocion());
echo $temp->output();
?>


<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FCliente").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "../Model/cliente/Clie_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('\xBFRegistrar ahora?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Clie(){
		var str = $("#FCliente").serialize();
		$.ajax({
			url: '../model/cliente/Clie_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
                                    {
					alert(data);
                                    }
                                 Cerrar_Ventana();
			}
		});
	};
        
        function Cerrar_Ventana(){  
            history.back();
        }
</script>
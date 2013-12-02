<?php
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

require '../templates/tamplates.php';


$temp= new Template('../layout/layout.tpl');
$temp->set('title','Registro');
$temp->set('header', 'Registro de clientes');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','
<form action="javascript: Agregar_Clie();" method="post" id="FCliente" class="modal fade in" >  
    <div class="alert alert-info"><h4>Registro de clientes</h4></div>
    <ul style="padding-right: 50px; text-align: center;">                
            <input name="Nombre" type="text" id="Nombre" placeholder="Nombre" class="input text" />
            <input name="Apellidos" type="text" id="Apellidos" placeholder="Tus apellidos" class="required wide text input" />
            <input name="Telefono" type="text" id="Telefono" class="required wide text input" placeholder="Tu numero de telefono" />
            <input name="Email" type="text" id="Email" placeholder="Tu correo electronico" class="required email wide input" />
            <input name="Nacimiento" type="text" id="Nacimiento" placeholder="Tu fecha de nacimiento" class="required wide input" />
            <input name="Usuario" type="text" id="Usuario" placeholder="Un nombre de usuario " class="required wide input" />
            <input name="Password" type="password" id="Password" placeholder="Una contrase&ntilde;a" class="required wide input" />        
            <input name="Password2" type="password" id="Password2" placeholder="Repite la contrase&ntilde;a" class="required wide input" />        
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Agregar" />
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
	
	function Agregar_Clie(){
		var str = $("#FCliente").serialize();
		$.ajax({
			url: '../model/cliente/Clie_Agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					if(data==1)
                                            Logeado_user();
                                        else
                                            alert(data);
			}
		});
	};        
        function Logeado_user() {
            location.href='index.php';
        } 
</script>

<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.blockUI.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.validate.1.5.2.js"></script>
    
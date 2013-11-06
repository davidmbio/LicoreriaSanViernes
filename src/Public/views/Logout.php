<?php
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Logout');
$temp->set('header', 'Cerrar Sesion');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','
<form action="javascript: Agregar_Clie();" method="post" id="FCliente" class="modal fade in" >  
    <div class="alert alert-info"><h4>Acceso al sistema</h4></div>
 <input name="tipo" type="hidden" id="tipo" value="logout"/>    
<p class="lead">¿Desea cerrar la sesion?</p>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Cerrar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="history.back();" />
    </div>
</form>  
');
echo $temp->output();
?>


<script language="javascript" type="text/javascript">
	
	function Agregar_Clie(){
		var str = $("#FCliente").serialize();
		$.ajax({
			url: '../model/cliente/Logeo.php',
			data: str,
			type: 'post',
			success: function(data){
                            if(data != "")
                                //alert(data);
                            Accedido();      
			}
		});
	};
        function Accedido() 
        {
            location.href='index.php';
        } 
        setTimeout ("Accedido()", 20000);
</script>
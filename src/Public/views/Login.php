<?php
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Logeo');
$temp->set('header', 'Acceso a SanViernes');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','
<form action="javascript: Logear();" method="post" id="FLogin" class="modal fade in" >  
    <div class="alert alert-info"><h4>Acceso al sistema</h4></div>
    <ul style="padding-right: 40px; text-align: center;">                
            <input name="tipo" type="hidden" id="tipo" value="login"/>

<div class="row" style="padding-bottom: 5px;">

            <img class="img-rounded" src="../../../web/img/key.png" /> </td>
        </div>
        <input name="user" type="text" id="user" placeholder="Nombre de usuario" class="required text input" />
            <br><input name="pass" type="password" id="pass" placeholder="Contrase&ntilde;a" class="required input" />        </td>
                 
      </ul>
    <div class="modal-footer">
        <input name="agregar" type="submit" id="agregar" class="btn btn-primary" value="Logear" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Salir" onclick="Accedido();" />
    </div>
</form>  
');
$temp->set('En_Promocion', En_Promocion());
echo $temp->output();
?>


<script language="javascript" type="text/javascript">
	
	
	function Logear(){
		var str = $("#FLogin").serialize();
		$.ajax({
			url: '../model/cliente/Logeo.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
                                    {
                                        if(data==1)
                                            Accedido();
                                        else
                                            alert(data);
                                    }
                                //Accedido();
			}
		});
	};
        
        function Accedido() 
        {
            location.href='index.php';
        } 
        setTimeout ("Accedido()", 20000);
</script>

<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.blockUI.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.validate.1.5.2.js"></script>
    
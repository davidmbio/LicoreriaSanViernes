<?php
require '../template/tamplates.php';
require '../flat_controller.php';
getState();
getInfSesion();
$emp=  getInformation();

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Bienvenida');
$temp->set('header', 'Bienvenido al Modulo Administrativo de SanViernes');
$temp->set('content','
       <div style="text-align: center;">            
       <h1>Empleado</h1><br>
       <h2>'.$emp['Nombre'].' '.$emp['Apellidos'].'</h2><br>
       <h4>Su sesi&oacute;n ha iniciado </h4>'.$_SESSION['Start'].'

</div><br>

');
echo $temp->output();
?>

<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.blockUI.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.validate.1.5.2.js"></script>
    
<?php
include '../Controller_master.php';


require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Bienvenidos');
$temp->set('header', 'Promociones del dia');        
$temp->set('content','    

<div id="divConsulta"></div>');
$temp->set('Tipo_Sesion', Verificador());
$temp->set('En_Promocion', En_Promocion());
echo $temp->output();

?>

<script>
        $("#divConsulta").load("../controller/Promocion.php"); 
</script>

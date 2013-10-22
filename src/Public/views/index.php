<?php

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Bienvenidos');
$temp->set('header', 'Promociones del dia');
$temp->set('content','<div id="divConsulta"></div>');

echo $temp->output();
?>

<script>
        $("#divConsulta").load("../controller/Promocion.php"); 
</script>


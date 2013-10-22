<?php

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Empresa');
$temp->set('header', 'Nuestra Empresa');
$temp->set('content','<div id="divConsulta"></div>');

echo $temp->output();
?>

<script> 
    setInterval(Refresca,1000)
    function Refresca() 
    { 
        $("#divConsulta").load("../controller/Empresa.php"); 
    } 
</script>

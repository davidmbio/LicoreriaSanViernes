<?php

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Directorio');
$temp->set('header', 'Nuestra Empresa');
$temp->set('content','<div id="divConsulta"></div>');
echo $temp->output();
?>

<script> 
    setInterval(Refresca,1000)
    function Refresca() 
    { 
        $("#divConsulta").load("../controller/Contacto.php"); 
    } 
</script>

<?php

include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();


require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Empresa');
$temp->set('header', 'Nuestra Empresa');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','<div id="divConsulta"></div>');
$temp->set('En_Promocion', En_Promocion());

echo $temp->output();
?>

<script> 
    setInterval(Refresca,1000)
    function Refresca() 
    { 
        $("#divConsulta").load("../controller/Empresa.php"); 
    } 
</script>

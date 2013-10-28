<?php
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Bienvenidos');
$temp->set('header', 'Promociones del dia');        
$temp->set('content','<div id="divConsulta"></div>');
$temp->set('Tipo_Sesion', $Contenido);
echo $temp->output();

?>

<script>
        $("#divConsulta").load("../controller/Promocion.php"); 
</script>

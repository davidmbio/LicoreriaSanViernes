<?php


include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();


require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Productos');
$temp->set('header', 'Lista de productos');
$temp->set('Tipo_Sesion', $Contenido);
$temp->set('content','<div id="divConsulta"></div>');
echo $temp->output();
?>

<script> 
        $("#divConsulta").load("../controller/Productos.php"); 
</script>
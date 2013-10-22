<?php

require '../templates/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Directorio');
$temp->set('header', 'Producto detalle');
$temp->set('content',' hola este es mi detalle');
echo $temp->output();
?>

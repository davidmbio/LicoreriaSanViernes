<?php
require '../template/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Gestion');
$temp->set('header', 'Datos de la empresa');
$temp->set('content','
  <div style="text-align: center;">            
        <section id="fluidGridSystem">
        
      <div id="Listado"></div>
      <div id="div_oculto" style="display: none;"></div>    
  </section>
</div>

');
echo $temp->output();
?>

<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.blockUI.js"></script>
<script language="javascript" type="text/javascript" src="../../../../web/js/lib/jquery.validate.1.5.2.js"></script>
    
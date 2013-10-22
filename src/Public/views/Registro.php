<?php

require '../templates/tamplates.php';


$temp= new Template('../layout/layout.tpl');
$temp->set('title','Registro');
$temp->set('header', 'Registro de clientes');
$temp->set('content','
    


<form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="inputText">Nombre:</label>
        <div class="controls">
          <input type="text" id="inputText" placeholder="Nombre">
        </div>
      </div>
          <div class="control-group">
          <label class="control-label" for="inputText">A. Paterno:</label>
        <div class="controls">
          <input type="text" id="inputText" placeholder="Apellido Paterno">
        </div>
      </div>
          <div class="control-group">
          <label class="control-label" for="inputText">A. Materno:</label>
        <div class="controls">
          <input type="text" id="inputText" placeholder="Apellido Materno">
        </div>
      </div>
          <div class="control-group">
          <label class="control-label" for="inputText">Nacimiento:</label>
        <div class="controls">
            <input type="text" id="inputText" placeholder="Fecha de nacimiento">
        </div>
      </div>
      <div class="control-group">
          <label class="control-label" for="inputText">Tel&eacute;fono:</label>
        <div class="controls">
          <input type="text" id="inputText" placeholder="Numero del telefono">
        </div>
      </div>
     <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" id="inputEmail" placeholder="Correo electronico">
        </div>
      </div>
      <div class="control-group">
          <label class="control-label" for="inputPassword">Contrase&ntilde;a: </label>
        <div class="controls">
            <input type="password" id="inputPassword" placeholder="Contrase&ntilde;a de cliente">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn">Registrarme</button>
        </div>
      </div><br>
    </form>  
    
');
echo $temp->output();
?>
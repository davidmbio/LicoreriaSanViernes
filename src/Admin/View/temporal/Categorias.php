<?php
require '../template/tamplates.php';

$temp= new Template('../layout/layout.tpl');
$temp->set('title','Categorias');
$temp->set('header', 'Listado de Categorias');
$temp->set('content','
       <div style="text-align: center;">            
    <section id="fluidGridSystem">
      <form class="form-search" action="javascript: Buscar();" id="FBuscar" name="FBuscar">        
        <div class="input-append">
            <input type="text" name="Busqueda_por_Nombre" id="Busqueda_por_Nombre" class="span6 search-query">
          <button type="submit" class="btn"><i class="icon-search"></i>Buscar</button>
        </div>
        
        
        <div class="row-fluid show-grid">        
          <div class="span12">
            <div class="row-fluid show-grid">
              <div class="row-fluid show-grid">                                     
                <div class="span4">Ordenar:
                    <select name="Ordenar_por" id="Ordenar_por">
                        <option value="IdCategoria">Id</option>
                        <option value="Categoria">Categoria</option>
                    </select>
                </div>                    
                <div class="span4">En:
                    <select name="Ordenacion" id="Ordenacion">
                        <option value="asc">Ascendente</option>
                        <option value="desc">Descendente</option>
                    </select>
                </div>                    
                <div class="span4">Registro:
                   <select name="Cantidad_Filas_Mostrar" id="Cantidad_Filas_Mostrar">
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                        <option value="10" selected="selected">10</option>
                        <option value="15">15</option>
                    </select>
                </div>                    
              </div>                    
           </div>
        </div>
      </div>
      </form> 
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
    
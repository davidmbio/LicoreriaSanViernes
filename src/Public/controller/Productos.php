<?php
    include '../model/Productos.php';
    $categorias=obt_Categorias();
    
    $productoss=  obt_Productos();
?>

<div style="background-color:white;">    
    <ul id="myTab" class="nav nav-tabs" style="color: #ad2525">
      <?while ($categoria = mysql_fetch_array($categorias)) {
        if($categoria['IdCategoria']==1)
            echo '<li class="active"><a href="#'.$categoria['IdCategoria'].'" data-toggle="tab">'.$categoria['Categoria'].'</a>';
        else
            echo '<li><a href="#'.$categoria['IdCategoria'].'" data-toggle="tab">'.$categoria['Categoria'].'</a></li>';    
        }?>              
    </ul>
<div id="myTabContent" class="tab-content">         
 <? while ($producto = mysql_fetch_array($productoss)){?>                
  <div class="tab-pane fade in active" id="<?=$producto['IdCategoria']?>">
    <div class="row-fluid">
        <ul class="thumbnails">
            <li class="span4">
                  <div class="thumbnail">
                      <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                      <div class="caption">
                      <h3><?=$producto['Nombre']?></h3>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                            <li><a href="javascript: Ver_Detalle(<?=$producto['IdProducto']?>);"> <i class="icon-eye-open"></i>Ver mas..</a></li>
                       </ul>
                      </div>
                      </div>
                  </div>
                

              </li>  
          </ul>
    </div>
  </div><?
}?>        
    <div class="tab-pane fade" id="2">
                  <div class="row-fluid">
                   <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                   <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
    </div>        
</div><br>

<script>
function Ver_Detalle($Id){
    $("#divConsulta").load("../views/PDetalle.php", {Id: $Id}, function(){
		$.blockUI({
			message: $('#divConsulta'),
			css:{
				top: '20%'
			}
		}); 
	});
        
    	
}
</script>
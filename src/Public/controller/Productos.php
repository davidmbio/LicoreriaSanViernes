<?php
    include '../model/Productos.php';
?>
<div style="background-color:white;">    
    <ul id="myTab" class="nav nav-tabs" style="color: #ad2525">
      <?php $categorias = getCategories(); ?>
      <?php $first = true; ?>
      <?php while ($categoria = mysql_fetch_array($categorias)): ?>
        <li class="<?php if($first): echo 'active'; $first=false; endif;?>">
            <a href="#licor<?php echo $categoria['IdCategoria']; ?>" data-toggle="tab"><?php echo $categoria['Categoria'] ?></a>
        </li> 
      <?php endwhile;?>              
    </ul>
    
    <div id="myTabContent" class="tab-content">
    <?php $categorias2 = getCategories(); $first = true;?>
    <?php while ($categoria = mysql_fetch_array($categorias2)): ?>
        <div class="tab-pane fade in <?php if($first): echo 'active'; $first=false; endif;?>" 
             id="licor<?php echo $categoria['IdCategoria']; ?>">
            <div class="row-fluid">
                <?php $productos = getProductsByCategory($categoria['IdCategoria']); ?>
                <?php $i = 0; ?>
                <?php while($producto = mysql_fetch_array($productos)): ?>
                    <?php if (($i%3) == 0): ?> <ul class="thumbnails"> <?php endif; ?>
                        <li class="span4">
                            <div class="thumbnail">
                                <img data-src="holder.js/300x200" src="../../Admin/View/productos/<?php echo getImages($producto['IdProducto']);?>">
                                <div class="caption">
                                <h3><?php echo $producto['Nombre']; ?></h3>
                                <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="javascript: Ver_Detalle(<?php echo $producto['IdProducto']; ?>);"> <i class="icon-eye-open"></i>Ver mas..</a></li>
                                 </ul>
                                </div>
                                </div>
                            </div>
                          </li>  
                    <?php if (($i+1)%3 == 0): ?> </ul> <?php endif; ?>
                    <?php $i++;  ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php  endwhile;?>  
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
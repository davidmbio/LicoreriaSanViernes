<?php
    include '../model/Productos.php';
    include '../Controller_master.php';
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
                                    <h2><small><?php echo strtoupper($producto['Nombre']); ?></small></h2>

                                    <?php if (isset($_SESSION['IdUser'])): ?>                                
                                <a class="btn btn-primary" href="javascript: Ver_Detalle(<?php echo $producto['IdProducto']; ?>);"><i class="icon-eye-open icon-white"></i>&nbsp;<small> MAS SOBRE EL PRODUCTO</small> </a>                                    
                                    <?php else: ?>
                                            <a class="btn btn-primary" href="javascript: Msj();"><i class="icon-eye-open"></i>&nbsp;&nbsp; Ver Detalle</a>                                                                    
                                    <?php endif ?>

                                </div>
                            </div>
                          </li>  
                    <?php if (($i+1)%3 == 0): ?> </ul> <?php endif; ?>
                    <?php $i++;  ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php  endwhile; ?>  
    </div>
</div>      
</div><br>

<script>
function Ver_Detalle(Id){
    $("#divConsulta").load("../views/PDetalle.php", {Id: Id}, function(){
		$.blockUI({
			message: $('#divConsulta'),
			css:{
				top: '20%'
			}
		}) ;
	});   
}

    function Msj(){
        alert('Inicia Session para ver el detalle del producto');
    }
</script>
<?php
    include '../model/Promocion.php';
    include '../Controller_master.php';
    
    $Res_Promocion= Promociones();?>
    
 <div id="myCarousel" class="carousel slide">
     <div class="carousel-inner"> 
        <?php    
            $Band=false;
            while($row = mysql_fetch_array($Res_Promocion)):
                if(!$Band):?>         
                    <div class="item active"><?php
                    $Band=true;            
                else:?>
                    <div class="item">
               <?php endif;?>
                    <img src="../../Admin/View/promociones/<?php echo $row['Ruta'].$row['Imagen']?>" alt=""/>                     
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 style="color: white;"><?php echo $row['Titulo']; ?></h2>
                          <p><small><?php echo $row['Descripcion']; ?></small></p>
                          <?php if (isset($_SESSION['IdUser'])): ?>
                                <a class="btn btn-large btn-primary" href="javascript: Detallazo('<?php echo $row['IdPromocion']?>');">Detalle</a>
                             <?php else: ?>
                                 <a class="btn btn-large btn-primary" href="javascript: Msj();">Detalle</a> 
                          <?php endif ?>               
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>     
     </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
 </div>

<script type="text/javascript">
    function Detallazo(Id){
        $("#divConsulta").load("../views/PromoDetalle.php", {Id: Id}, function(){
            $.blockUI({
                message: $('#divConsulta'),
                css:{
                    top: '10%'
                }
            }); 
        });


    }

    function Msj(){
        alert('Inicia Session para ver el detalle de la promocion');
    }
</script>
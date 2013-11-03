<?php
    include '../model/Promocion.php';
    
    $Res_Promocion= Promociones();?>
    
 <div id="myCarousel" class="carousel slide">
     <div class="carousel-inner"> 
        <?php    
        $Band=FALSE;
        while($row = mysql_fetch_array($Res_Promocion)){
            if($Band==FALSE){?>         
                <div class="item active"><?php
                $Band=TRUE;            
            }
            else{?>
                <div class="item"><?                
            } ?>         
                    <img src="../../Admin/View/promociones/<?=$row['Ruta'].$row['Imagen']?>" alt="">                     
                <div class="container">
                    <div class="carousel-caption">
                        <h2 style="color: white;"><?php echo $row['Titulo']; ?></h2>
                      <p><small><?php echo $row['Descripcion']; ?></small></p>
                      <?php 
                         if (isset($_SESSION['IdUser']))
                            echo '<a class="btn btn-large btn-primary" href="javascript: Detallazo('.$row['IdPromocion'].');">Detalle</a>'; 
                         else
                             echo '<a class="btn btn-large btn-primary" href="javascript: Msj();">Detalle</a>'; 
                      ?>                      
                    </div>
                </div>
          </div>
        <?php     
        } ?>     
     </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
 </div>
 </div>

<script>
function Detallazo($Id){
    $("#divConsulta").load("../views/PromoDetalle.php", {Id: $Id}, function(){
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
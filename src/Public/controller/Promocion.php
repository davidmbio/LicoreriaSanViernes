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
            <img src="../../../<?php echo $row['Ruta']; ?>" alt="">                     
                <div class="container">
                    <div class="carousel-caption">
                        <h2 style="color: white;"><?php echo $row['Titulo']; ?></h2>
                      <p><small><?php echo $row['Descripcion']; ?></small></p>
                      <a class="btn btn-large btn-primary" href="../views/Prueba.php">Sign up today</a>
                    </div>
                </div>
          </div>
        <?php     
        } ?>     
     </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
 </div>
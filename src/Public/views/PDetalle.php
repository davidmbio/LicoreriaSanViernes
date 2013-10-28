<?php

include '../model/Config.php';
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

$sql="select * from tblProductos as pr inner join tblCategorias as cat
on pr.IdCategoria=cat.IdCategoria where pr.IdProducto=".$_POST['Id'];

$detalle=  mysql_query($sql);
$dddd= mysql_fetch_array($detalle);

$sql="select * from tblImagen where IdProducto=".$_POST['Id'];
$Ima=  mysql_query($sql);

$Cat=  ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdCategoria=".$dddd['IdCategoria']);
$Pro=  ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd 
on pd.IdPromocion=pro.IdPromocion where IdProducto=".$_POST['Id']);

$Detallado=NULL;

function ObtieneResultado($query){
        $ress=  mysql_query($query);
        $Resss= mysql_num_rows($ress);
        if($Resss==0)
            return FALSE;
        else
            return TRUE;
}
function ObtieneDetallado($query){
        $ress=  mysql_query($query);
        return mysql_fetch_array($ress) ;
}

?>

<div class="span12" style="background-color: white;">
    
    


<h2 class="min"><?=$dddd['Nombre'] ?></h2>
            <p class="lead"><strong>Descripcion: </strong> <?=$dddd['Descripcion'] ?></p>
            <?
                if($Cat!=0){
                    $da=  ObtieneDetallado ("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdCategoria=".$dddd['IdCategoria']);
                    $total=$dddd['Precio']-($dddd['Precio']*((int)$da['Descuento']/100));
                    echo '<p class="lead"><strong>Producto en promocion: <br> Antes: </strong> <strike style="color: #cc0a0a" >'.$dddd['Precio'].' </strike> <br> Ahora: 
                     <h1 style="color: blue;">$ '.$total.'</h1>';
                }
                else
                     echo 'no esta en proomocion';
            ?>
            
             <p class="lead">Imagenes</p>            
            <div class="span2" ></div>            
            <div style="background-color: #bc5454; padding: 10px;" class="span8" >            
<div id="myCarousel" class="carousel slide">
     <div class="carousel-inner"> 
        <?php    
        $Band=FALSE;
        while($row = mysql_fetch_array($Ima)){
            if($Band==FALSE){?>         
                <div class="item active"><?php
                $Band=TRUE;            
            }
            else{?>
                <div class="item"><?                
            } ?>         
                    <img src="../../Admin/View/productos/<?=$row['Ruta']?><?=$row['Imagen']?>" alt="">                     
          </div>
        <?php     
        } ?>     
     </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
 </div>
</div>
                </div>
</div>
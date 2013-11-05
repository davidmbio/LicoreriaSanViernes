<?php
include '../model/Config.php';
include '../Controller_master.php';

if (isset($_SESSION['IdUser']))
    $Contenido = Regresa_Logeado();
else
    $Contenido = Regresa_Logeo();

$query = "select * from tblProductos as pr inner join tblCategorias as cat
on pr.IdCategoria=cat.IdCategoria where pr.IdProducto=" . $_POST['Id'];
$Productos = mysql_query($query);
$RowProduct = mysql_fetch_array($Productos);

$query = "select * from tblImagen where IdProducto=" . $_POST['Id'];
$Imagenes = mysql_query($query);

$PromoCategoria = ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdCategoria=" . $RowProduct['IdCategoria']);
$PromoProducto = ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd 
on pd.IdPromocion=pro.IdPromocion where IdProducto=" . $_POST['Id']);

function ObtieneResultado($query) {
    $ress = mysql_query($query);
    $Resss = mysql_num_rows($ress);
    if ($Resss == 0)
        return FALSE;
    else
        return TRUE;
}

function ObtieneDetalles($query) {
    $ress = mysql_query($query);
    return mysql_fetch_array($ress);
}
?>

<div class="span12" style="background-color: white;">
    <h2 class="min"><?php echo $RowProduct['Nombre'] ?></h2>
    <p class="lead"><strong>Descripcion: </strong> <?php echo $RowProduct['Descripcion'] ?></p>
    <?php
    if ($PromoCategoria==TRUE) {
        $da = ObtieneDetalles("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdCategoria=" . $RowProduct['IdCategoria']);
        
        $total = $RowProduct['Precio'] - ($RowProduct['Precio'] * ((int) $da['Descuento'] / 100));
        echo '<p class="lead"><strong>Producto en promocion: <br> Antes: </strong> <strike style="color: #cc0a0a" >' . $RowProduct['Precio'] . ' </strike> <br> Ahora: 
                     <h1 style="color: blue;">$ ' . $total . '</h1>';
    }
    else{
        if($PromoProducto==TRUE){
        $da = ObtieneDetalles("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdProducto=" . $RowProduct['IdProducto']);
        
        $total = $RowProduct['Precio'] - ($RowProduct['Precio'] * ((int) $da['Descuento'] / 100));
        echo '<p class="lead"><strong>Producto en promocion: <br> Antes: </strong> <strike style="color: #cc0a0a" >' . $RowProduct['Precio'] . ' </strike> <br> Ahora: 
                     <h1 style="color: blue;">$ ' . $total . '</h1>';
        }
        else{    
            echo '<p class="lead">    <strong>Precio: </strong> $ '.$RowProduct['Precio'] .'  </p>';
        } 
    }
    ?>
    
    <p>Puntuar</p>
    <div class="btn-toolbar">
  <div class="btn-group">
    <a class="btn" href="#"><i class="icon-star"></i></a>
    <a class="btn" href="#"><i class="icon-star"></i></a>
    <a class="btn" href="#"><i class="icon-star"></i></a>
    <a class="btn" href="#"><i class="icon-star"></i></a>
    <a class="btn" href="#"><i class="icon-star"></i></a>
  </div>
</div>
    <p>Hacer un comentario</p>
    <div class="field"><textarea class="input textarea" placeholder="Comentar" rows="3"></textarea></div>
    <p class="lead">Imagenes</p>            
    <div class="span2" ></div>            
    <div style="background-color: #bc5454; padding: 10px;" class="span8" >            
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner"> 
                <?php
                $Band = FALSE;
                while ($row = mysql_fetch_array($Imagenes)) {
                    if ($Band == FALSE) {
                        ?>         
                        <div class="item active"><?php
                            $Band = TRUE;
                        } else {
                            ?>
                            <div class="item"><? }
                        ?>         
                            <img src="../../Admin/View/productos/<?= $row['Ruta'] ?><?php echo $row['Imagen'] ?>" alt="">                     
                        </div>
                        <?php }
                    ?>     
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    </div>
</div>
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
        $da = ObtieneDetalles("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdPromocion=" . $RowProduct['IdCategoria']);
        
        $total = $RowProduct['Precio'] - ($RowProduct['Precio'] * ((int) $da['Descuento'] / 100));
        echo '<p class="lead"><strong>Producto en promocion: <br> Antes: </strong> <strike style="color: #cc0a0a" >' . $RowProduct['Precio'] . ' </strike> <br> Ahora: 
                     <h1 style="color: blue;">$ ' . $total . '</h1>';
        }
        else{    
            echo 'no esta en proomocion';
        } 
    }
    ?>

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
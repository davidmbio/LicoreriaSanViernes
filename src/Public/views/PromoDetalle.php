<?php

include '../model/Config.php';
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

$query="select * from tblPromocion as pr inner join tblProm_Detalle as pd
on pr.IdPromocion=pd.IdPromocion where pr.IdPromocion=".$_POST['Id'];

$Productos=  mysql_query($query);
$RowProduct= mysql_fetch_array($Productos);

$PromoCategoria=  ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdCategoria=".$RowProduct['IdCategoria']);
$PromoProducto=  ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd 
on pd.IdPromocion=pro.IdPromocion where IdProducto=".$_POST['Id']);

function ObtieneResultado($query){
        $ress=  mysql_query($query);
        $Resss= mysql_num_rows($ress);
        if($Resss==0)
            return FALSE;
        else
            return TRUE;
}
function ObtieneDetalles($query){
        $ress=  mysql_query($query);
        return mysql_fetch_array($ress) ;
}

?>

<div class="span12" style="background-color: white;">
    <h2 class="min"><?=$RowProduct['Titulo'] ?></h2>
                <div class="image img-polaroid">
                    <img src="../../Admin/View/promociones/<?=$RowProduct['Ruta'].$RowProduct['Imagen']?>">
                </div>
                <p class="lead"><strong>Descripcion: </strong> <?=$RowProduct['Descripcion'] ?></p>
                
<?
$Promocion=NULL;
if($RowProduct['IdProducto']==0)
{
    $Promocion=  ObtieneDetalles("Select * from tblCategorias where IdCategoria=".$RowProduct['IdCategoria']);
 
}
echo '<p class="lead"><strong>En promocion: </strong><br> Categorias: <br>'.$Promocion['Categoria'].'</p>';
echo '<p class="lead"><strong>Termina el: </strong><br>'.$RowProduct['Fin'].'</p>';
echo '<p class="lead"><strong>Descuento del: </strong><br><h2>'.$RowProduct['Descuento'].'% </h2></p>';
?>

</div>
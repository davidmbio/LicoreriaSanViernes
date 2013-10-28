<?php

include '../model/Config.php';
include '../Controller_master.php';

if(isset($_SESSION['IdUser'])) 
    $Contenido= Regresa_Logeado();
else
    $Contenido= Regresa_Logeo();

$sql="select * from tblPromocion as pr inner join tblProm_Detalle as pd
on pr.IdPromocion=pd.IdPromocion where pr.IdPromocion=".$_POST['Id'];

$detalle=  mysql_query($sql);
$dddd= mysql_fetch_array($detalle);

$Cat=  ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd on pd.IdPromocion=pro.IdPromocion where IdCategoria=".$dddd['IdCategoria']);
$Pro=  ObtieneResultado("select * from tblPromocion as pro inner join tblProm_Detalle as pd 
on pd.IdPromocion=pro.IdPromocion where IdProducto=".$_POST['Id']);

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
    <h2 class="min"><?=$dddd['Titulo'] ?></h2>
                <div class="image img-polaroid">
                    <img src="../../Admin/View/promociones/<?=$dddd['Ruta'].$dddd['Imagen']?>">
                </div>
                <p class="lead"><strong>Descripcion: </strong> <?=$dddd['Descripcion'] ?></p>
                
<?
$Promocion=NULL;
if($dddd['IdProducto']==0)
{
    $Promocion=  ObtieneDetallado("Select * from tblCategorias where IdCategoria=".$dddd['IdCategoria']);
 
}
echo '<p class="lead"><strong>En promocion: </strong><br> Categorias: <br>'.$Promocion['Categoria'].'</p>';
echo '<p class="lead"><strong>Termina el: </strong><br>'.$dddd['Fin'].'</p>';
echo '<p class="lead"><strong>Descuento del: </strong><br><h2>'.$dddd['Descuento'].'% </h2></p>';
?>

</div>
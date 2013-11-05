<?php

include '../model/Config.php';
include '../Controller_master.php';

$query="select * from tblPromocion as pr inner join tblProm_Detalle as pd
on pr.IdPromocion=pd.IdPromocion where pr.IdPromocion=".$_POST['Id'];

$Productos=  mysql_query($query);
$RowProduct= mysql_fetch_array($Productos);

$categg="select * from tblCategorias 
where IdCategoria in(select IdCategoria from tblProm_Detalle pd 
inner join tblPromocion p on pd.IdPromocion = p.IdPromocion where p.IdPromocion={$_POST['Id']})";
$Ca=mysql_query($categg);

$produc="select * from tblProductos 
where IdProducto in(select IdProducto from tblProm_Detalle pd 
inner join tblPromocion p on pd.IdPromocion = p.IdPromocion where p.IdPromocion={$_POST['Id']})";
$pro=mysql_query($produc);

$ExisteC=Existe($Ca);
$ExisteP=Existe($pro);

function Existe($sql){
    $Resss= mysql_num_rows($sql);
    if($Resss==0)
        return 0;
    else
        return 1;        
}

function ObtieneDetalles($query){
    return mysql_query($query);       
}

?>

<div class="span12" style="background-color: white;">
    <h2 class="min"><?=$RowProduct['Titulo'] ?></h2>
                <div class="image img-polaroid">
                    <img src="../../Admin/View/promociones/<?=$RowProduct['Ruta'].$RowProduct['Imagen']?>">
                </div>
    

                <p class="lead"><strong>Descripcion: </strong> <?=$RowProduct['Descripcion'] ?></p>               
<?
if($ExisteC!=0 || $ExisteP!=0){    
    if($ExisteC!=0){
        echo '    <strong class="small">Categorias en promocion</strong><br>';
        while($cateorias = mysql_fetch_array($Ca)){
            echo '<i class="icon-check"></i>'.$cateorias['Categoria'].'<br>';
        }
    }
    
    if($ExisteP!=0){      
        echo '<br><strong class="small">Productos en promocion</strong><br>'; 
        while($productoss = mysql_fetch_array($pro)){
        echo '<i class="icon-check"></i>'.$productoss['Nombre'].'<br>';
        }
    }
}
else 
   echo '<br><p class="lead"><strong>Aun no se dan de alta los productos en promocion</strong><br></p>';;

echo '<br><p class="lead"><strong>Termina el: </strong><br>'.$RowProduct['Fin'].'</p>';
echo '<p class="lead"><strong>Descuento del: </strong><br><h2>'.$RowProduct['Descuento'].'% </h2></p>';
echo '<input name="cancelar" type="button" id="cancelar" class="btn btn-large btn-block btn" value="Regresar" onclick="Accedido();" />';
echo ' <div class="row"><br></div>';

?>
                
                <script>
        function Accedido() 
        {
            location.href='index.php';
        } 
        setTimeout ("Accedido()", 20000);
                </script>

</div>
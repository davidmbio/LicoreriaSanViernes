<link rel="stylesheet" href="vots/style.css">

<?php
include '../model/Config.php';
include '../Controller_master.php';
include '../model/Productos.php';

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
    <div style="background-color: white;">
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
<div class="contenedor">
    <?php
    require_once("vots/config.php");
    $posts=$db->query("select * from posts where id={$_POST['Id']}");
    if ($filas=$posts->fetch_array()){
        do{
        ?>
        <h3><?php echo utf8_encode($filas["titulo"]); ?></h3>
        <ul class="votos">
            <li class="voting_btn up_button" data-voto="likes" data-id="<?php echo $filas["id"]; ?>"><span><?php echo $filas["likes"]; ?></span></li>
            <li class="voting_btn dw_button" data-voto="hates" data-id="<?php echo $filas["id"]; ?>"><span><?php echo $filas["hates"]; ?></span></li>
        </ul>
        <p>
            <form action="javascript: Agregar_Comentario();" method="POST" id="FComentario" >
                <input type="hidden" name="producto" value="<?php echo $_POST['Id'];?>" />
                <input type="hidden" name="usuario" value="<?php echo $_SESSION['IdUser']?>" />
                <div class="field">
                    <textarea class="input textarea" name="comentario" placeholder="Escribe tu comentario" rows="3">
                </textarea></div>
                <input name="agregar" type="submit" class="btn btn-primary" value="Comentar" /> 
            </form>
            <?php echo utf8_encode($filas["resumen"]); ?></p>
        <?php
        }
        while($filas=$posts->fetch_array());
    }
    else
        echo "<h3>No hay entradas disponibles.</h3>";
    ?>
    
</div>    
    <div class="page-header">
        <h1><small>Comentarios</small></h1>
    </div>
    <div class="row"  style="margin: 10px; text-align: left; ">
        <?php $comentarios=  getComentarios($_POST['Id']);
        while ($comen= mysql_fetch_array($comentarios)){?>
        <div class="primary alert"><i class="icon-ok"></i><strong class="small">Usuario: <?php echo $comen['Nombre'];?></strong><br><?php echo $comen['Comentario'].' <br><i class="icon-share-alt"></i>Comentado el:'.$comen['Fecha'];?></div> 
        <?php }?>
    </div>
        
    </div>
</div>

<script>    	
	function Agregar_Comentario(){
		var str = $("#FComentario").serialize();
		$.ajax({
			url: '../model/comentarios.php',
			data: str,
			type: 'POST',
			success: function(data){
				if(data != "")
					alert(data);
                                 //Logeado_user();
                        }
		});
	};    
        
        
$(document).ready(function() 
{
    $(".votos .voting_btn").click(function (e) 
    {
         e.preventDefault();
        var voto_hecho = $(this).data('voto');
        var id = $(this).data("id"); 
        var li = $(this);
        
        if(voto_hecho && id)
        {
            $.post('vots/ajax_voto.php', {'id':id, 'voto':voto_hecho}, function(data) 
            {
                if (data!="voto_duplicado") 
                {
                    li.addClass(voto_hecho+"_votado").find("span").text(data);
                    li.closest("ul").append("<span class='votado'>Gracias!</span>");
                }
                else li.closest("ul").append("<span class='votado'>Ya has votado!</span>");
            });
            setTimeout(function() {$('.votado').fadeOut('fast');}, 3000);
        }
    });
});
        
</script>
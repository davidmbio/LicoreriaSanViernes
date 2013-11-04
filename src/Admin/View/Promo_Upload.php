<?php require_once 'promociones/src/upload.php';?>


<div class="modal fade in">
<div class="alert alert-info"><h4>Imagen de Promocion</h4></div>
    <ul style="padding-right: 50px; text-align: center;">     
        <?php 
        $pro=$_POST['IdPromocion'];        
        $images = getImages($pro);?>
        <table class="table table-striped">                
            <?php $image = mysql_fetch_array($images)?>
                <a class="image-delete" href="?delete=<?php echo $image['IdImagen'];?>">                                
                    <div class="image img-polaroid">
                        <img src="promociones/<?php echo $image['Ruta'].$image['Imagen']?>">
                    </div>
                </a>                                        
        </table>
        
        <form action="promociones/src/upload.php" name="form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="producto" id="producto" value="<?php echo $pro;?>"/>
                <input  type="file" name="image" required="required"/> &nbsp; &nbsp;
                <div class="modal-footer">
                    <input  type="submit" name="submit" value="Cargar imagen" class="btn btn-primary"/>
                    <input name="cancelar" type="button" id="cancelar" class="btn" value="Salir" onclick="Cerrar_Producto(); " />
                </div>
          </form>                        
    </ul>
</div>

<?php require_once './productos/src/upload.php';?>


<div class="modal fade in">
<div class="alert alert-info"><h4>Imagenes de Productos</h4></div>
    <ul style="padding-right: 50px; text-align: center;">     
        <?php  
        $pro=$_POST['IdProducto'];
        $images = getImages($_POST['IdProducto']);?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <?php while ($image = mysql_fetch_array($images)){?>
                        <th>
                            <a class="image-delete" href="?delete=<?php echo $image['IdImagen'];?>">
                                <image src="productos/<?php echo $image['Ruta'].$image['Imagen']?>" height="100px" width="120px"/>
                            </a>
                        </th>                    
                    <?php } ?>
                    </tr>
                </thead>>
            </table>
        
        <form action="productos/src/upload.php" name="form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="producto" id="producto" value="<?php echo $pro;?>"/>
                <input  type="file" name="image" required="required"/> &nbsp; &nbsp;
                <div class="modal-footer">
                    <input  type="submit" name="submit" value="Cargar imagen" class="btn btn-primary"/>
                    <input name="cancelar" type="button" id="cancelar" class="btn" value="Salir" onclick="Cerrar_Producto(); " />
                </div>
          </form>                        
    </ul>
</div>

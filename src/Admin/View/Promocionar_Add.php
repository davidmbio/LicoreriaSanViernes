<?php
	include "../Model/basico.php";
	include "../Model/conexion.php";
    
    $today = date("Y-m-d");
        
        if($_POST['Tipo']=="IdCategoria"){
            $query="select * from tblCategorias where IdCategoria not in "
                    . "(select IdCategoria from tblProm_Detalle pd "
                    . "inner join tblPromocion p on pd.IdPromocion = p.IdPromocion where p.Fin >= '{$today}')";
            
            $Colum="Categoria";
        }
        else{
            $query="SELECT * FROM tblProductos where IdCategoria not in "
                    . "(select IdCategoria from tblProm_Detalle pd "
                    . "inner join tblPromocion p on pd.IdPromocion = p.IdPromocion where p.Fin >= '{$today}') and IdProducto not in "
                    . "(select IdProducto from tblProm_Detalle pd "
                    . "inner join tblPromocion p on pd.IdPromocion = p.IdPromocion where p.Fin >= '{$today}')";
            
            $Colum="Nombre";            
        }
        
        $Respue = mysql_query($query) or die(mysql_error());  
?>

<div class="alert alert-info"><h4>Lista de <?php echo $Colum;?></h4></div>
<?php
   while ($row = mysql_fetch_array($Respue)) {?>            
    <div class="span6">
            <div class="row-fluid show-grid">               
                <div class="span3"><?php echo $row[$Colum]?></div>
                <span class="btn btn-primary save-promo" data-promo="<?php echo $_POST['Id'] ?>" 
                      data-type="<?php  echo $Colum?>" data-type_id="<?php echo $row[0]; ?>">
                    <i class="icon-gift icon-white"></i> &nbsp; Promocionar</span>
            </div>
        </div>   
        <?php }?>   
    
        <div class="modal-footer">
            <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Promocion();" />
        </div>

<script language="javascript" type="text/javascript">
    
    $(document).ready(function(){
        $(".save-promo").click( function(){
            var _idPromo = $(this).attr('data-promo');
            var _type = $(this).attr('data-type');
            var _idType = $(this).attr('data-type_id');
            
            var _data = {idPromo: _idPromo, type: _type, idType: _idType, action:"agregar" };
            
            var row = $(this).closest('.span6');
            
            $.ajax({
			url: '../Model/promocion/Promo_detalles.php',
			data: _data,
			type: 'post',
			success: function(data){
                if(data == "success"){
                    deleteItemAdded(row);
                }
			}
		});
            
        });
    });
	function deleteItemAdded(element){
        $(element).remove();
    }
</script>
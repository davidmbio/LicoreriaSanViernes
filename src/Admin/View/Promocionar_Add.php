<?php
	include "../Model/basico.php";
	include "../Model/conexion.php";
        
        
        
        
        if($_POST['Tipo']=="IdCategoria"){
            $query="select * from tblCategorias";
            $Colum="Categoria";
        }
        else{
            $query="select * from tblProductos";
            $Colum="Nombre";            
        }
        
        $Respue = mysql_query($query);  
?>

<div class="alert alert-info"><h4>Lista de <?php echo $Colum;?></h4></div>
<?php
        
        
        /*if(strtotime('2013-10-28')>=strtotime('2013-10-27'))
            echo 'aun falta la fecha';
        else
            echo 'fecha caducada';         
          */
        
        
        while ($row = mysql_fetch_array($Respue)) {?>            
    <div class="span6">
            <div class="row-fluid show-grid">               
                <div class="span3"><?php echo $row[$Colum]?></div>
                <a href="" class="btn btn-primary"><i class="icon-gift icon-white"></i> &zwj;sPromocionar</a>
            </div>
        </div>   
        <?php }?>   
    
        <div class="modal-footer">
            <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Promocion();" />
        </div>

<script language="javascript" type="text/javascript">	
	function Promocionar(){
		var str = $("#FPromocion").serialize();
		$.ajax({
			url: '../Model/producto/Pro_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);

			}
		});
	};
</script>
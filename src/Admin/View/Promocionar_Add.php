<?
	include "../Model/basico.php";
	include "../Model/conexion.php";
        
        
        
        
        if($_POST['Tipo']=="IdCategoria"){
            $sql="select * from tblCategorias";
            $Colum="Categoria";
        }
        else{
            $sql="select * from tblProductos";
            $Colum="Nombre";            
        }
        
        $Respue = mysql_query($sql);  
?>

<div class="alert alert-info"><h4>Lista de <? echo $Colum;?></h4></div>
        <?
        
        
        /*if(strtotime('2013-10-28')>=strtotime('2013-10-27'))
            echo 'aun falta la fecha';
        else
            echo 'fecha caducada';         
          */
        
        
        while ($row = mysql_fetch_array($Respue)) {?>            
    <div class="span6">
            <div class="row-fluid show-grid">               
                <div class="span3"><? echo $row[$Colum]?></div>
                <a href="" class="btn btn-primary"><i class="icon-gift icon-white"></i> &zwj;sPromocionar</a>
            </div>
        </div>   
        <? }?>   
    
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
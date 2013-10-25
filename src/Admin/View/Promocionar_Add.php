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
<form action="javascript: Promocionar();" method="post" id="FPromocion" class="modal fade in" >  
    <div class="alert alert-info"><h4>Lista de <? echo $_POST['Tipo']?></h4></div>
    
        <? while ($row = mysql_fetch_array($Respue)) {?>            
    <div class="span10">
            <div class="row-fluid show-grid">               
                <div class="span3"><? echo $row[$Colum]?></div>
                <a href="" class="btn btn-primary"><i class="icon-gift icon-white"></i> &zwj;sPromocionar</a>
            </div>
        </div>   
        <? }?>   
    
        <div class="modal-footer">
            <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar_Promocion();" />
        </div>
</form>


<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FPromocion").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar a esta nueva persona?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Promocionar(){
		var str = $("#FPromocion").serialize();
		$.ajax({
			url: '../Model/producto/Pro_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Promocion();
				Buscar_Promocion();
			}
		});
	};
</script>
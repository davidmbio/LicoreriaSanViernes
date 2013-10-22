<?
	if(empty($_POST['IdGestion'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";

	$sql = sprintf("select * from tblGestion where IdGestion=%d",
		(int)$_POST['IdGestion']
	);
	$gest = mysql_query($sql);
	$num_rs_gest= mysql_num_rows($gest);
	
        if ($num_rs_gest==0){
		echo "No existen personas con ese IDE";
		exit;
	}
	
	$rs_gest = mysql_fetch_assoc($gest);
	
?>
<form action="javascript: Modificar_Ges();" method="post" id="FGestion" class="modal fade in" >  
    <input type="hidden" id="IdCategoria" name="IdGestion" value="<?=$rs_gest['IdGestion']?>" />
    <div class="alert alert-info"><h4>Datos de la empresa</h4></div>
    <ul style="margin: 10px;">                
        <label><strong>Mision: </strong><?=$rs_gest['Mision']?></label>
            <label><strong>Vision: </strong><?=$rs_gest['Vision']?></label>
            <label><strong>Telefono: </strong><?=$rs_gest['Telefono']?></label>
            <label><strong>Email: </strong><?=$rs_gest['Email']?></label>
            <label><strong>Direccion: </strong><?=$rs_gest['Direccion']?></label>
            <label><strong>Valores: </strong><?=$rs_gest['Valores']?></label>           
      </ul>
    <div class="modal-footer">
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cerrar" onclick="Cerrar();" />
    </div>
</form>
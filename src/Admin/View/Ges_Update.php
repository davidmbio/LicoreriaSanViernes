<?
	if(empty($_POST['IdGestion'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../Model/basico.php";
	include "../Model/conexion.php";

        

	$sql ="select * from tblGestion where IdGestion=1";
	$gest = mysql_query($sql);
	$num_rs_gest= mysql_num_rows($gest);
	
        if ($num_rs_gest==0){
		echo "No existen personas con ese IDE";
		exit;
	}
        
        
        if($_POST['IdGestion']==1){
            $Nom="Mision";
            $tam=7;
        }
        elseif($_POST['IdGestion']==2){
            $Nom="Vision";
            $tam=7;
        }
        elseif($_POST['IdGestion']==3){   
            $Nom="Email";
            $tam=3;
        }
        elseif($_POST['IdGestion']==4){   
            $Nom="Telefono";
            $tam=3;
        }
        elseif($_POST['IdGestion']==5){   
            $Nom="Direccion";
            $tam=4; 
        }
        elseif($_POST['IdGestion']==6){
            $Nom="Valores";
            $tam=5;
        }
	
	$rs_gest = mysql_fetch_assoc($gest);
	
?>
<form action="javascript: Modificar_Ges();" method="post" id="FGestion" class="modal fade in" >  
    <input type="hidden" id="IdCategoria" name="IdGestion" value="<?=$Nom?>" />
    <div class="alert alert-info"><h4>Modificar <? echo $Nom; ?></h4></div>
    <ul style="margin: 10px;">                
        <li class="field">
            <label class="inline"><? echo $Nom; ?>:</label>
            <textarea style="text-align: left;" name="Campo" class="wide input textarea" placeholder="<? echo $Nom; ?> de la empresa" rows="<? echo $tam;?>">
                <?=$rs_gest[$Nom]?>
            </textarea>
        </li>                              
      </ul>
    <div class="modal-footer">
        <input name="modificar" type="submit" id="modificar" class="btn btn-primary" value="Modificar" />
        <input name="cancelar" type="button" id="cancelar" class="btn" value="Cancelar" onclick="Cerrar();" />
    </div>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#FGestion").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar esta categoria?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function Modificar_Ges(){
		var str = $("#FGestion").serialize();
		$.ajax({
			url: '../Model/gestion/Ges_Modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				Cerrar_Gestion();
				Buscar_Gestion();
			}
		});
	};
</script>
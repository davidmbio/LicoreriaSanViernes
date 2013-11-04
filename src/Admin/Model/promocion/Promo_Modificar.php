<?php
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['IdPromocion']) || empty($_POST['Titulo']) || empty($_POST['Descripcion']) 
                || empty($_POST['FFinal']) || empty($_POST['Descuento'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*modificar el registro*/
    $result = mysql_query("SELECT Fin FROM tblPromocion WHERE IdPromocion = {$_POST['IdPromocion']}");
    
    $lastDate = 0;
    while ($row = mysql_fetch_array($result)){
        $lastDate = $row[0];
    }
    

	$query = sprintf("UPDATE tblPromocion SET  Titulo='%s', Descripcion='%s', Fin='%s', Descuento='%s' 
            where IdPromocion=%d;",
		fn_filtro(substr($_POST['Titulo'], 0, 60)),
		fn_filtro(substr($_POST['Descripcion'], 0, 60)),
		fn_filtro(substr($_POST['FFinal'], 0, 60)),
		fn_filtro(substr($_POST['Descuento'], 0, 60)),
		fn_filtro((int)$_POST['IdPromocion'])
	);
	if(!mysql_query($query))
		echo "Error al modificar al la promocion:\n$query";
    else {
        //AGREGUE ESTO PARA ELIMINAR LAS RELACIONES ANTERIORES
        $today = date("Y-m-d");
        $lastDate = date("Y-m-d", strtotime($lastDate));
        $newDate = date("Y-m-d", strtotime($_POST['FFinal']));
        
        if(($lastDate < $today) && ($lastDate < $newDate)){
            $sql = "DELETE FROM tblProm_Detalle WHERE IdPromocion = {$_POST['IdPromocion']}";
            mysql_query($sql) or die(mysql_error());
        }
        //-------------------------------------------------//
    }
	exit;
?>?>
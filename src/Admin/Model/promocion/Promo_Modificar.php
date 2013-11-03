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

	$sql = sprintf("UPDATE tblPromocion SET  Titulo='%s', Descripcion='%s', Fin='%s', Descuento='%s' 
            where IdPromocion=%d;",
		fn_filtro(substr($_POST['Titulo'], 0, 60)),
		fn_filtro(substr($_POST['Descripcion'], 0, 60)),
		fn_filtro(substr($_POST['FFinal'], 0, 60)),
		fn_filtro(substr($_POST['Descuento'], 0, 60)),
		fn_filtro((int)$_POST['IdPromocion'])
	);
	if(!mysql_query($sql))
		echo "Error al modificar al la promocion:\n$sql";
	exit;
?>?>
<?php
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
        
	if(empty($_POST['Titulo']) || empty($_POST['Descripcion']) || empty($_POST['FFinal']) 
                || empty($_POST['Descuento'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	$query = "select IdPromocion from tblPromocion order by IdPromocion desc limit 1";
	$promo = mysql_query($query);
	$rs_promo = mysql_fetch_assoc($promo);
	
	$ide_promo = $rs_promo['IdPromocion'] + 1;
        
	$query = sprintf("INSERT INTO tblPromocion VALUES (%d, '%s', '%s', '%s', '%s','','');",
		
                fn_filtro((int)$ide_promo),
		fn_filtro(substr($_POST['Titulo'], 0, 50)),
		fn_filtro(substr($_POST['Descripcion'], 0, 60)),
		fn_filtro(substr($_POST['FFinal'], 0, 60)),
		fn_filtro(substr($_POST['Descuento'], 0, 70))
	);

	if(!mysql_query($query))
		echo "Error al insertar a la nueva persona:\n$query";

	exit;
?>
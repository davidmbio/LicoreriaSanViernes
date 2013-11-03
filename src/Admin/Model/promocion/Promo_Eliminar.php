<?php
	include "../conexion.php";
	include "../basico.php";
        
	$query = sprintf("delete from tblPromocion where IdPromocion=%d",
		(int)$_POST['IdPromocion']
	);
	if(!mysql_query($query))
		echo "Ocurrio un error\n$query";
	exit;
?>
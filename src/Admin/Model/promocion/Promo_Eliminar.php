<?
	include "../conexion.php";
	include "../basico.php";
        
	$sql = sprintf("delete from tblPromocion where IdPromocion=%d",
		(int)$_POST['IdPromocion']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>
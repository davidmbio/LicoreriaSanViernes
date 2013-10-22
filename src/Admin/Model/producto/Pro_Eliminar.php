<?
	include "../conexion.php";
	include "../basico.php";
	$sql = sprintf("delete from tblProductos where IdProducto=%d",
		(int)$_POST['IdProducto']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>
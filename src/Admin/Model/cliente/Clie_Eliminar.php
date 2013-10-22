<?
	include "../conexion.php";
	include "../basico.php";
        
	$sql = sprintf("delete from tblClientes where IdCliente=%d",
		(int)$_POST['IdCliente']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>
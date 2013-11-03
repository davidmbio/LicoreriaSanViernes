<?php
	include "../conexion.php";
	include "../basico.php";
        
	$query = sprintf("delete from tblClientes where IdCliente=%d",
		(int)$_POST['IdCliente']
	);
	if(!mysql_query($query))
		echo "Ocurrio un error\n$query";
	exit;
?>
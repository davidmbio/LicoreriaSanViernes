<?php
	include "../conexion.php";
	include "../basico.php";
        
	$query = sprintf("delete from tblCategorias where IdCategoria=%d",
		(int)$_POST['IdCategoria']
	);
	if(!mysql_query($query))
		echo "Ocurrio un error\n$query";
	exit;
?>
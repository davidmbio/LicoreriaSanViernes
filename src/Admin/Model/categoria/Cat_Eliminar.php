<?php
	include "../conexion.php";
	include "../basico.php";
        
	$sql = sprintf("delete from tblCategorias where IdCategoria=%d",
		(int)$_POST['IdCategoria']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>
<?php
	include "../conexion.php";
	include "../basico.php";
        
	$query = sprintf("delete from tblEmpleados where IdEmpleado=%d",
		(int)$_POST['IdEmpleado']
	);
	if(!mysql_query($query))
		echo "Ocurrio un error\n $query";
	exit;
?>
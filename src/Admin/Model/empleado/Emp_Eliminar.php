<?php
	include "../conexion.php";
	include "../basico.php";
        
	$sql = sprintf("delete from tblEmpleados where IdEmpleado=%d",
		(int)$_POST['IdEmpleado']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n $sql";
	exit;
?>
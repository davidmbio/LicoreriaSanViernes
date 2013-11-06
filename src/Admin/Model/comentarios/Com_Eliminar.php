<?php
	include "../conexion.php";
	include "../basico.php";
        

	$query = $_POST['Accion'];
	if(!mysql_query($query))
		echo "Ocurrio un error\n$query";	
        exit;
         
?>
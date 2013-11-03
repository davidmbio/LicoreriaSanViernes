<?php
	include "../conexion.php";
	$usu_per = $_GET['Nombre'];
	$query = "select * from tblProductos where Nombre='$usu_per'";
	$per = mysql_query($query);
	$num_rs_per = mysql_num_rows($per);
	if($num_rs_per == 0)
		echo "true";
	else
		echo "false";
?>
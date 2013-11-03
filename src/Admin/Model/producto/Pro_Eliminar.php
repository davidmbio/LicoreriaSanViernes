<?php
	include "../conexion.php";
	include "../basico.php";
	
        $query = sprintf("delete from tblImagen where IdProducto=%d",
		(int)$_POST['IdProducto']
	);
	if(!mysql_query($query))
		echo "1.- Ocurrio un error\n$query";
	else{
            $query = sprintf("delete from tblProductos where IdProducto=%d",(int)$_POST['IdProducto']);
	if(!mysql_query($query))
		echo "2.- Ocurrio un error\n$query";
        }
        exit;
?>
<?php

include 'DataBase.php';

function obt_Productos()
{       
        
	$conex = open_connection_bd();
	$resultado = mysql_query('select * from bdLicoreria.tblProductos as Pro 
            inner join bdLicoreria.tblCategorias as Cat on Cat.IdCategoria=Pro.IdCategoria;', $conex);
	$productos = array();
	while ($fila = mysql_fetch_assoc($resultado)) {
		$productos[] = $fila;
	}	
	close_connection_bd($conex);
	return $productos;
}
?>

<?php
include_once 'DataBase.php';

function obt_Clientes()
{       
        
	$conex = open_connection_bd();
	$resultado = mysql_query('select * from tblCliente', $conex);
	$Clientes = array();
	while ($fila = mysql_fetch_assoc($resultado)) {
		$Clientes[] = $fila;
	}	
	close_connection_bd($conex);
	return $Clientes;
}
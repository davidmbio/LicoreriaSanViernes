<?php
function open_connection_bd()
{
	$conex = mysql_connect('localhost', 'root', 'dave');
	mysql_select_db('bd_Licoreria', $conex);
	
	return $conex;
}

function close_connection_bd($conex)
{
	mysql_close($conex);	
}

function obt_comunicados()
{
	$enlace = open_connection_bd();
	$resultado = mysql_query('SELECT * FROM tblNews;', $enlace);
	$comunicados = array();
	while ($fila = mysql_fetch_assoc($resultado)) {
		$comunicados[] = $fila;
	}	
	close_connection_bd($enlace);
	return $comunicados;
}


/*
function obt_comunicado_por_id($id)
{
	$conex = open_connetion_bd();
	$id = mysql_real_escape_string($id);
	$consul = 'SELECT * FROM tblPrueba where Id='.$id;
	$result = mysql_query($consulta);
	$fila = mysql_fetch_assoc($resultado);
	close_connection_bd($enlace);
	return $fila;
}*/
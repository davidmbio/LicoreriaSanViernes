<?php

function Abrir_Conexion(){
	$conex = mysql_connect('localhost', 'root', 'dave');
	mysql_select_db('bdLicoreria', $conex);
	
	return $conex;
}

function Cerrar_Conexion($conex){
	mysql_close($conex);	
}
?>

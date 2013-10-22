<?php
include_once 'DataBase.php';

function obt_Empleados(){       
        
	$conex = Abrir_Conexion();
	$resultado = mysql_query('SELECT * FROM tblEmpleados;', $conex);
	$Datos = array();
	while ($fila = mysql_fetch_assoc($resultado)) {
		$Empleados[] = $fila;
	}	
        Cerrar_Conexion($conex);
        
	return $Empleados;
}
<?php
include 'Config.php';

function Datos_Empresa(){
    $conex=  Abrir_Conexion();
    $sql=mysql_query("select * from tblGestion",$conex);
    Cerrar_Conexion($conex);
    
    return $sql;
}
?> 
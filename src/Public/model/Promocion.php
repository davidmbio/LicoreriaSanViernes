<?php
include 'Config.php';

function Promociones(){
    $conex=  Abrir_Conexion();
    $sql=mysql_query("SELECT * FROM tblPromocion",$conex);
    Cerrar_Conexion($conex);
    
    return $sql;
}
?> 
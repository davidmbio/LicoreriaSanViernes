<?php
include 'Config.php';

function Datos_Empresa(){
    $sql=mysql_query("select * from tblGestion");
    
    return $sql;
}
?> 
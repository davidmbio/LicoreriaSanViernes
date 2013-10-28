<?php
include 'Config.php';

function Promociones(){
    $sql=mysql_query("SELECT * FROM tblPromocion");
    
    
    return $sql;
}
?> 
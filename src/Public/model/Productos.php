<?php

include 'Config.php';

function obt_Productos()
{       
	$resultado = mysql_query('select * from tblProductos where IdCategoria=1');
	
	return $resultado;
}

function obt_Categorias(){
    $sql=  mysql_query("select * from tblCategorias");
    return $sql;
}
?>

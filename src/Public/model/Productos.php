<?php

include 'Config.php';

function getProductsByCategory($idCategory){
    return mysql_query('select * from tblProductos where IdCategoria='.$idCategory);
}

function getCategories(){
    return mysql_query("select * from tblCategorias");
}

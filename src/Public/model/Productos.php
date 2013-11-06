<?php

include 'Config.php';

function getProductsByCategory($idCategory){
    return mysql_query('select * from tblProductos where IdCategoria='.$idCategory);
}

function getCategories(){
    return mysql_query("select * from tblCategorias");
}

function getImages($Producto){
    $query=  mysql_query("select * from tblImagen where IdProducto=$Producto limit 1");
    $rowscount= mysql_num_rows($query);
    if($rowscount==0)
        return 'img/default.jpg';
    else
    {
        $path=  mysql_fetch_array($query);
        return $path['Ruta'].$path['Imagen'];
    }
}

function getComentarios($producto){
    return mysql_query("select * from tblComentarios as co inner join tblClientes as cl
on co.IdCliente=cl.IdCliente where co.IdProducto={$producto} and co.Aprobado='Aprobado'");
}

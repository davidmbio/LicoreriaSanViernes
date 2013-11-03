<?php

include "../conexion.php";
include "../basico.php";
	
    
if(isset($_POST['action'])){
    switch ($_POST['action']){
        case "agregar":
            addPromoDetalles();
        break;
    }
}

function addPromoDetalles(){
    $idPromo = $_POST['idPromo'];
    $idCategoria = 0;
    $idProducto = 0;
    
    $_POST['type'] == "Categoria" ? 
            $idCategoria = $_POST['idType'] : $idProducto =  $_POST['idType'];
    
    $query = "INSERT INTO tblProm_Detalle VALUES ({$idPromo}, {$idProducto}, {$idCategoria})";
    mysql_query($query) or die(mysql_error());
    
    echo 'success';
}


<?php

require_once 'connection.php';

if(!empty($_FILES)){
    $name = $_FILES['image']['name'];
    $producto=$_POST['producto'];
    $path = "img/";
    
    if (file_exists("img/".$_FILES["image"]["name"])){
        echo $_FILES["file"]["name"] . "La imagen ya existe, Cambie el nombre. ";
    }
    else{
        move_uploaded_file($_FILES["image"]["tmp_name"], "../img/".$_FILES["image"]["name"]);       
        $sql = "UPDATE tblPromocion SET Ruta='{$path} ', Imagen='{$name}' WHERE IdPromocion=".$producto;
        mysql_query($sql) or die(mysql_error());
        header('Location: ../../Promocion.php');        
    }
}

if(!empty($_GET['delete'])){
    deleteImage($_GET['delete']);
}

function getImages($producto){
    $result = mysql_query("select * from tblPromocion where IdPromocion={$producto};") 
    or die(mysql_error()); 
    
    return $result;
}

function deleteImage($id){
    $sql="select IdPromocion, Ruta, Imagen from tblPromocion where IdPromocion=".$id;    
    $adsd=mysql_query($sql) or die(mysql_error());
    $fil=mysql_fetch_assoc($adsd);    
    unlink($fil['Ruta'].$fil['Imagen']);
    
    $sql = "UPDATE tblPromocion SET Ruta=' ', Imagen=' ' WHERE IdPromocion=".$id;
    mysql_query($sql) or die(mysql_error());
    
    header('Location: ../../Promocion.php');
}

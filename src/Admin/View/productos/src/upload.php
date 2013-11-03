<?php

require_once 'connection.php';

/*SE EJECUTA CUANDO DETECTA EL ENVIO DE UN ARCHIVO
 * AL HACER SUBMIT AL FORM EN EL ARCHIVO index.php
 */
if(!empty($_FILES)){
    $name = $_FILES['image']['name'];
    $producto=$_POST['producto'];
    $path = "img/";
    
    if (file_exists("img/".$_FILES["image"]["name"])){
        echo $_FILES["file"]["name"] . "La imagen ya existe, Cambie el nombre. ";
    }
    else{
        
        move_uploaded_file($_FILES["image"]["tmp_name"], "../img/".$_FILES["image"]["name"]);
        
        $query = "insert into tblImagen values('','{$producto}','$path','$name')";
        mysql_query($query) or die(mysql_error());
        header('Location: ../../Productos.php');        
    }
}

if(!empty($_GET['delete'])){
    deleteImage($_GET['delete']);
}

function getImages($producto){
    $result = mysql_query("select * from tblImagen where IdProducto={$producto};") 
    or die(mysql_error()); 
    
    return $result;
}

function deleteImage($id){
    $sql = "delete from tblImagen where IdImagen=1=".$id;
    mysql_query($sql) or die(mysql_error());
    
    $sql="select * from images where id=".$id;    
    mysql_query($sql) or die(mysql_error());
    $fil=mysql_fetch_assoc($sql);
    
    unlink($fil['path'].$fil['description']);

    
    //@TODO: ELIMINAR EL ARCHIVO DE LA CARPETA data/img
    
    //Redirecciona al index: con este ejemplo puedes usar otro archivo .php para 
    //insertar o eliminar y despues redireccionar al index.php para regrsarte al listado
    header('Location: index.php');
}

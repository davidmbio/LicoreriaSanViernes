<?php
include 'Controller_master.php';

$conexion=mysql_connect('localhost','root','dave') or die('No hay conexión a la base de datos');
$db=mysql_select_db('bdLicoreria',$conexion)or die('no existe la base de datos.');

if(!empty($_FILES)){
    $name = $_FILES['image']['name'];
    $path = "img/";
    
    if (file_exists("img/".$_FILES["image"]["name"])){
        echo $_FILES["file"]["name"] . "La imagen ya existe, Cambie el nombre. ";
    }
    else{
        if(file_exists($_SESSION['UserRutaFoto'].$_SESSION['UserFoto']))
            unlink ($_SESSION['UserRutaFoto'].$_SESSION['UserFoto']);       
        
        move_uploaded_file($_FILES["image"]["tmp_name"], "img/".$_FILES["image"]["name"]);
        
        $sql = "UPDATE tblClientes SET Ruta='{$path}', Foto='{$name}' WHERE IdCliente={$_SESSION['IdUser']}";
        mysql_query($sql) or die(mysql_error());
        A_Logearse($_SESSION['IdUser']);
        header('Location: views/index.php');  
        exit;
    }
}

/* DETECTA CUANDO HAY UN PARAMETRO POR GET CON NOMBRE DELETE 
if(!empty($_GET['delete'])){
    deleteImage($_GET['delete']);
}

//ES LLAMADO EN EL INDEX.PHP PARA MOSTRAR LA LISTA DE IMAGENES
function getImages(){
    $result = mysql_query("SELECT *FROM images") 
    or die(mysql_error()); 
    
    return $result;
}

function deleteImage($id){
    $sql = "DELETE FROM images WHERE id =".$id;
    mysql_query($sql) or die(mysql_error());
    
    $sql="select * from images where id=".$id;    
    mysql_query($sql) or die(mysql_error());
    $fil=mysql_fetch_assoc($sql);
    
    unlink($fil['path'].$fil['description']);

    header('Location: index.php');
}*/

?>
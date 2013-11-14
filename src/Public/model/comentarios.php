<?php
include '../model/Config.php';

if(empty($_POST['comentario']))
    echo 'Escribe un comentario';
else{ 
    	$query = "select IdComentario from tblComentarios order by IdComentario desc limit 1";
	$com = mysql_query($query);
	$rs_com = mysql_fetch_assoc($com);
	$ide_com = $rs_com['IdComentario'] + 1;
        $fecha=date("Y-m-d");

        
        $sql="insert into tblComentarios values({$ide_com},{$_POST['usuario']},{$_POST['producto']},'{$_POST['comentario']}','$fecha','No Aprobado');";
        if(!mysql_query($sql))
            echo 'Error al insertar'.mysql_error();
        else 
            echo 'Su comentario se ha enviado satisfactoriamente!!';
        
}
             
?>
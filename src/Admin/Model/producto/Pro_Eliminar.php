<?
	include "../conexion.php";
	include "../basico.php";
	
        $sql = sprintf("delete from tblImagen where IdProducto=%d",
		(int)$_POST['IdProducto']
	);
	if(!mysql_query($sql))
		echo "1.- Ocurrio un error\n$sql";
	else{
            $sql = sprintf("delete from tblProductos where IdProducto=%d",(int)$_POST['IdProducto']);
	if(!mysql_query($sql))
		echo "2.- Ocurrio un error\n$sql";
        }
        exit;
?>
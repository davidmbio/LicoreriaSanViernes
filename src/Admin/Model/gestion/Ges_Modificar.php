<?
	include "../conexion.php";
	include "../basico.php";

        
        $sql = "UPDATE tblGestion SET  {$_POST['IdGestion']}='".$_POST['Campo']."' where IdGestion=1";			
        if(!mysql_query($sql))
		echo "Error al modificar el datos de la empresa:\n$sql";
	exit;
?>?>
<?php
	include "../conexion.php";
	include "../basico.php";

        
        $query = "UPDATE tblGestion SET  {$_POST['IdGestion']}='".$_POST['Campo']."' where IdGestion=1";			
        if(!mysql_query($query))
		echo "Error al modificar el datos de la empresa:\n$query";
	exit;
?>?>
<?php
	include "../conexion.php";
	include "../basico.php";
        
	$query = sprintf("delete from tblPromocion where IdPromocion=%d",
		(int)$_POST['IdPromocion']
	);
	if(!mysql_query($query))
		echo "Ocurrio un error\n$query";
        else
        {
            $query=  sprintf("delete from tblProm_Detalle where IdPromocion=%d",
                    (int)$_POST['IdPromocion']
           );
            if(!mysql_query($query))
                echo "Ocurrio un erro al procesar \n$query";
        }
	exit;
?>
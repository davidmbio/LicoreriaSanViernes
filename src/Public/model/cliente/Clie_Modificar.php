<?php
	include "../../../Admin/Model/conexion.php";
	include "../../../Admin/Model/basico.php";
	include "../../../Admin/Model/Encriptation.php";
        include '../../Controller_master.php';
	        
        $_Contra=  getEncripted($_SESSION['UserPass']);
        
        if(!empty($_POST['Password2']))
            $_Contra= getEncripted($_POST['Password2']);           
        
	$query = sprintf("UPDATE tblClientes SET  Nombre='%s', Apellidos='%s', Telefono='%s', Email='%s' 
            , Nacimiento='%s', Password='%s'  where IdCliente=%d;",
		fn_filtro(substr($_POST['Nombre'], 0, 60)),
		fn_filtro(substr($_POST['Apellidos'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 70)),
		fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
		fn_filtro(substr($_Contra, 0, 70)),
		fn_filtro((int)$_POST['IdCliente'])
	);
	if(!mysql_query($query))
		echo "Error al modificar el cliente:\n$query";
            A_Logearse($_POST['IdCliente']);
	exit;
?>?>
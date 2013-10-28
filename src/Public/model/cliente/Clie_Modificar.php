<?
	include "../../../Admin/Model/conexion.php";
	include "../../../Admin/Model/basico.php";
        include '../../Controller_master.php';
	        
        $_Contra=$_SESSION['UserPass'];
        
        if(!empty($_POST['Password2']))
            $_Contra= $_POST['Password2'];           
        
	$sql = sprintf("UPDATE tblClientes SET  Nombre='%s', Apellidos='%s', Telefono='%s', Email='%s' 
            , Nacimiento='%s', Password='%s'  where IdCliente=%d;",
		fn_filtro(substr($_POST['Nombre'], 0, 60)),
		fn_filtro(substr($_POST['Apellidos'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 70)),
		fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
		fn_filtro(substr($_Contra, 0, 70)),
		fn_filtro((int)$_POST['IdCliente'])
	);
	if(!mysql_query($sql))
		echo "Error al modificar el cliente:\n$sql";
            A_Logearse($_POST['IdCliente']);
	exit;
?>?>
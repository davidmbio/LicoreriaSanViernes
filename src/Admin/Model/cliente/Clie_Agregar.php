<?php
	include "../conexion.php";
	include "../basico.php";
        include '../Encriptation.php';
	
	/*verificamos si las variables se envian*/
        
	if(empty($_POST['Nombre']) || empty($_POST['Apellidos']) || empty($_POST['Telefono']) || empty($_POST['Email']) || empty($_POST['Nacimiento'])
                || empty($_POST['Usuario']) || empty($_POST['Password'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$query = "select IdCliente from tblClientes order by IdCliente desc limit 1";
	$clie = mysql_query($query);
	$rs_clie = mysql_fetch_assoc($clie);
	
	/*insertamos el nuevo registro*/
	$ide_clie = $rs_clie['IdCliente'] + 1;

	$query = sprintf("INSERT INTO tblClientes VALUES (%d, '%s', '%s', '%s', '%s', '%s', '%s', '%s','img/','default.jpg');",
		
                fn_filtro((int)$ide_clie),
		fn_filtro(substr($_POST['Nombre'], 0, 50)),
		fn_filtro(substr($_POST['Apellidos'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 70)),
                fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
                fn_filtro(substr(getEncripted($_POST['Usuario']), 0, 100)),
                fn_filtro(substr(getEncripted($_POST['Password']), 0, 100))
	);

	if(!mysql_query($query)){
		echo "Ocurrio un error al registrar el cliente:\n$query";
        }
	exit;
?>
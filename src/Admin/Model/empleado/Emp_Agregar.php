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
	$query = "select IdEmpleado from tblEmpleados order by IdEmpleado desc limit 1";
	$per = mysql_query($query);
	$rs_per = mysql_fetch_assoc($per);
	
	/*insertamos el nuevo registro*/
	$ide_per = $rs_per['IdEmpleado'] + 1;

	$query = sprintf("INSERT INTO tblEmpleados VALUES (%d, '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
		
                fn_filtro((int)$ide_per),
		fn_filtro(substr($_POST['Nombre'], 0, 50)),
		fn_filtro(substr($_POST['Apellidos'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 70)),
                fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
                fn_filtro(substr(getEncripted($_POST['Usuario']), 0, 100)),
                fn_filtro(substr(getEncripted($_POST['Password']), 0, 100))
	);

	if(!mysql_query($query))
		echo "Ocurri&oacute; un error al insertar el empleado:\n$query";

	exit;
?>
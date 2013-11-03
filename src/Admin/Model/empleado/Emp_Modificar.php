<?php
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['IdEmpleado']) || empty($_POST['Nombre']) || empty($_POST['Apellidos']) || empty($_POST['Telefono']) ||
                empty($_POST['Email']) || empty($_POST['Nacimiento']) || empty($_POST['Password'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*modificar el registro*/

	$query = sprintf("UPDATE tblEmpleados SET  Nombre='%s', Apellidos='%s', Telefono='%s', Email='%s' 
            , Nacimiento='%s', Password='%s'  where IdEmpleado=%d;",
		fn_filtro(substr($_POST['Nombre'], 0, 60)),
		fn_filtro(substr($_POST['Apellidos'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 70)),
		fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
		fn_filtro(substr($_POST['Password'], 0, 70)),
		fn_filtro((int)$_POST['IdEmpleado'])
	);
	if(!mysql_query($query))
		echo "Error al modificar al empleado:\n$query";
	exit;
?>?>
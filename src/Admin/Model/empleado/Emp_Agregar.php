<?
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
        
	if(empty($_POST['Nombre']) || empty($_POST['Apellidos']) || empty($_POST['Telefono']) || empty($_POST['Email']) || empty($_POST['Nacimiento'])
                || empty($_POST['Usuario']) || empty($_POST['Password'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$sql = "select IdEmpleado from tblEmpleados order by IdEmpleado desc limit 1";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
	
	/*insertamos el nuevo registro*/
	$ide_per = $rs_per['IdEmpleado'] + 1;

	$sql = sprintf("INSERT INTO tblEmpleados VALUES (%d, '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
		
                fn_filtro((int)$ide_per),
		fn_filtro(substr($_POST['Nombre'], 0, 50)),
		fn_filtro(substr($_POST['Apellidos'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 70)),
                fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
                fn_filtro(substr($_POST['Usuario'], 0, 70)),
                fn_filtro(substr($_POST['Password'], 0, 70))
	);

	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";

	exit;
?>
<?
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['IdGestion']) || empty($_POST['Mision']) || empty($_POST['Vision']) || empty($_POST['Email']) ||
                empty($_POST['Telefono']) || empty($_POST['Direccion']) || empty($_POST['Valores'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*modificar el registro*/

	$sql = sprintf("UPDATE tblGestion SET  Mision='%s', Vision='%s', Email='%s', Telefono='%s' 
            , Direccion='%s', Valores='%s'  where IdGestion=%d;",
		fn_filtro(substr($_POST['Mision'], 0, 60)),
		fn_filtro(substr($_POST['Vision'], 0, 60)),
		fn_filtro(substr($_POST['Email'], 0, 60)),
		fn_filtro(substr($_POST['Telefono'], 0, 70)),
		fn_filtro(substr($_POST['Direccion'], 0, 70)),
		fn_filtro(substr($_POST['Valores'], 0, 70)),
		fn_filtro((int)$_POST['IdGestion'])
	);
	if(!mysql_query($sql))
		echo "Error al modificar el datos de la empresa:\n$sql";
	exit;
?>?>
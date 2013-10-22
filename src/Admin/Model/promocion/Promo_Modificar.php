<?
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['IdPromocion']) || empty($_POST['Titulo']) || empty($_POST['Descripcion']) || empty($_POST['Ruta'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*modificar el registro*/

	$sql = sprintf("UPDATE tblPromocion SET  Titulo='%s', Descripcion='%s', Ruta='%s' 
            where IdPromocion=%d;",
		fn_filtro(substr($_POST['Titulo'], 0, 60)),
		fn_filtro(substr($_POST['Descripcion'], 0, 60)),
		fn_filtro(substr($_POST['Ruta'], 0, 60)),
		fn_filtro((int)$_POST['IdPromocion'])
	);
	if(!mysql_query($sql))
		echo "Error al modificar al empleado:\n$sql";
	exit;
?>?>
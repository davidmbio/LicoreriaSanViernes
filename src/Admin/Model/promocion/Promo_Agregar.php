<?
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
        
	if(empty($_POST['Titulo']) || empty($_POST['Descripcion']) || empty($_POST['Imagen'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$sql = "select IdPromocion from tblPromocion order by IdPromocion desc limit 1";
	$promo = mysql_query($sql);
	$rs_promo = mysql_fetch_assoc($promo);
	
	/*insertamos el nuevo registro*/
	$ide_promo = $rs_promo['IdPromocion'] + 1;

	$sql = sprintf("INSERT INTO tblPromocion VALUES (%d, '%s', '%s', '%s', '%s');",
		
                fn_filtro((int)$ide_promo),
		fn_filtro(substr($_POST['Titulo'], 0, 50)),
		fn_filtro(substr($_POST['Descripcion'], 0, 60)),
		fn_filtro(substr($_POST['Ruta'], 0, 60)),
		fn_filtro(substr($_POST['Imagen'], 0, 70))
	);

	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";

	exit;
?>
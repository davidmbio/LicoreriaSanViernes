<?php
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['IdCategoria']) || empty($_POST['Categoria'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*modificar el registro*/

	$query = sprintf("UPDATE tblCategorias SET  Categoria='%s' where IdCategoria=%d;",
		fn_filtro(substr($_POST['Categoria'], 0, 60)),
		fn_filtro((int)$_POST['IdCategoria'])
	);
	if(!mysql_query($query))
		echo "Error al modificar la categoria:\n$query";
	exit;
?>?>
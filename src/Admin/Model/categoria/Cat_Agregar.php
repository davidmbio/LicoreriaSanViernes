<?php
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
        
	if(empty($_POST['Categoria'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$query = "select IdCategoria from tblCategorias order by IdCategoria desc limit 1";
	$cate = mysql_query($query);
	$rs_cate = mysql_fetch_assoc($cate);
	
	/*insertamos el nuevo registro*/
	$ide_cate = $rs_cate['IdCategoria'] + 1;

	$query = sprintf("INSERT INTO tblCategorias VALUES (%d, '%s');",
		
                fn_filtro((int)$ide_cate),
		fn_filtro(substr($_POST['Categoria'], 0, 50))
	);

	if(!mysql_query($query))
		echo "Error al insertar a la nueva persona:\n$query";

	exit;
?>
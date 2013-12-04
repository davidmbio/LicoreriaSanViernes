<?php
	include "../conexion.php";
	include "../basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['IdProducto']) || empty($_POST['IdCategoria']) || empty($_POST['Nombre']) || 
                empty($_POST['Descripcion']) || empty($_POST['Precio'])
                || empty($_POST['Caducidad'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	/*modificar el registro*/

	$query = sprintf("UPDATE tblProductos SET  IdCategoria=%d, Nombre='%s', Descripcion='%s', Precio='%s',
            Caducidad='%s'where IdProducto=%d;",
		fn_filtro((int)$_POST['IdCategoria']),
		fn_filtro(substr($_POST['Nombre'], 0, 100)),
		fn_filtro(substr($_POST['Descripcion'], 0, 300)),
		fn_filtro(substr($_POST['Precio'], 0, 10)),
		fn_filtro(substr($_POST['Caducidad'], 0, 10)),
		fn_filtro((int)$_POST['IdProducto'])
	);
	if(!mysql_query($query))
		echo "Error al insertar a la nueva persona:\n$query";
	exit;
?>
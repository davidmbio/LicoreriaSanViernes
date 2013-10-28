
<?
	include "../conexion.php";
	include "../basico.php";
        
        if(empty($_POST['IdCategoria']) || empty($_POST['Nombre']) || empty($_POST['Descripcion']) || empty($_POST['Precio']) || empty($_POST['Caducidad'])){
            echo "Usted no a llenado todos los campos";
            exit;
	}

        $name = $_FILES['Imagen']['name'];
        $path = "img/";     
        
	$sql = "select IdProducto from tblProductos order by IdProducto desc limit 1";	
        $pro = mysql_query($sql);        
	$rs_pro = mysql_fetch_assoc($pro);
	$ide_pro = $rs_pro['IdProducto'] + 1;
        $sql = sprintf("INSERT INTO tblProductos VALUES (%d, %d, '%s', '%s', '%s', '%s');",		
                fn_filtro((int)$ide_pro),
		fn_filtro((int)$_POST['IdCategoria']),
		fn_filtro(substr($_POST['Nombre'], 0, 60)),
		fn_filtro(substr($_POST['Descripcion'], 0, 250)),
		fn_filtro(substr($_POST['Precio'], 0, 70)),
                fn_filtro(substr($_POST['Caducidad'], 0, 70))
	);

	if(!mysql_query($sql))
		echo "Error al insertar el nuevo producto:\n$sql";        
        exit;
?>
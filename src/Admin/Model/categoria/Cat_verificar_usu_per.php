<?
	include "../conexion.php";
	$usu_cat = $_GET['Categoria'];
	$sql = "select * from tblClientes where Categoria='$usu_cat'";
	$cate = mysql_query($sql);
	$num_rs_per = mysql_num_rows($cate);
	if($num_rs_cate == 0)
		echo "true";
	else
		echo "false";
?>
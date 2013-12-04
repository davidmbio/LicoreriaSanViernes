<?php
	
include "../../Admin/Model/conexion.php";
include "../../Admin/Model/basico.php";

include '../Controller_master.php';
	
if($_POST['tipo']=='login'){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		echo "Introduce e nombre usuario y la contraseña";
	}
        else{
            $user=  mysql_real_escape_string($_POST['user']);
            $pass=  mysql_real_escape_string($_POST['pass']);

            $sql="select * from tblClientes where Usuario='$user' and Password='$pass'";
            $query= mysql_query($sql);
            $row=  mysql_fetch_array($query);
            $count=  mysql_num_rows($query);
            
            if($count!=0){
                $id=$row['IdCliente'];
                A_Logearse($id);
                echo '1';
                exit;               
            }
             else
                 echo 'Los datos no estan registrados!';            
       }
}
else
{
    Cierra_Session();
    exit;
}
?>
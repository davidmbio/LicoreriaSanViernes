<?php
	
include '../../../Admin/flat_controller.php';
include "../../../Admin/Model/conexion.php";
include "../../../Admin/Model/basico.php";
include '../../../Admin/Model/Encriptation.php';
	
if(empty($_POST['user']) || empty($_POST['pass'])){
    echo "Introduce tus datos de acceso";
}
else{
    session_start();
    $user= getEncripted(mysql_real_escape_string($_POST['user']));
    $pass= getEncripted(mysql_real_escape_string($_POST['pass']));

    $sql="select * from tblEmpleados where Usuario='$user' and Password='$pass'";
    $query= mysql_query($sql);
    $row=  mysql_fetch_array($query);
    $count=  mysql_num_rows($query);
    CreateSesionVar($row['IdEmpleado']);
            
    if($count!=0){
        $id=$row['IdEmpleado'];
        echo 1;
        exit;               
     }
     else
        echo 'Los datos introducidos son incorrectas, intente nuevamente!';            
}

?>
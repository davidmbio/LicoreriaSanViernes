<?php
	
include "../../../Admin/Model/conexion.php";
include "../../../Admin/Model/basico.php";

include '../../Controller_master.php';

	/*verificamos si las variables se envian*/
        
	if(empty($_POST['Nombre']) || empty($_POST['Apellidos']) || empty($_POST['Telefono']) || empty($_POST['Email']) || empty($_POST['Nacimiento'])
                || empty($_POST['Usuario']) || empty($_POST['Password']) || empty($_POST['Password2'])){
		echo "Usted no a llenado todos los campos";
	}
        else{
            $query = "select IdCliente from tblClientes order by IdCliente desc limit 1";
            $clie = mysql_query($query);
            $rs_clie = mysql_fetch_assoc($clie);
            $ide_clie = $rs_clie['IdCliente'] + 1;                    
                        
            $Queryuser="SELECT * FROM tblClientes where Usuario='{$_POST['Usuario']}'";
            $NU = mysql_query($Queryuser);
            $num_rs_user= mysql_num_rows($NU);            
            
            if ($num_rs_user==0){            
                if($_POST['Password']==$_POST['Password2']){
                    
                    $query = sprintf("INSERT INTO tblClientes VALUES (%d, '%s', '%s', '%s', '%s', '%s', '%s', '%s','img/','default.jpg');",
                            fn_filtro((int)$ide_clie),
                            fn_filtro(substr($_POST['Nombre'], 0, 50)),
                            fn_filtro(substr($_POST['Apellidos'], 0, 60)),
                            fn_filtro(substr($_POST['Telefono'], 0, 60)),
                            fn_filtro(substr($_POST['Email'], 0, 70)),
                            fn_filtro(substr($_POST['Nacimiento'], 0, 70)),
                            fn_filtro(substr($_POST['Usuario'], 0, 70)),
                            fn_filtro(substr($_POST['Password'], 0, 70))
                    );

                    if(!mysql_query($query))
                            echo "Error al insertar a la nueva persona:\n$query";       
                    A_Logearse($ide_clie);
                    exit;        
                   }
                   else
                       echo 'Las contraseñas no coinciden';
            }else {
                echo "El nombre de usuario {$_POST['Usuario']} ya esta ocupado!, Disponibles {$_POST['Usuario']}".$ide_clie;
                Cierra_Session();
            }
        }
?>
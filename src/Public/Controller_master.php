<?php
include '../../Admin/Model/conexion.php';

session_start();
            
function Verificador(){
    if(isset($_SESSION['IdUser'])) 
        return Regresa_Logeado();
    else
        return Regresa_Logeo();
}

function Regresa_Logeo(){
    return '
        <div class="">
            <div style="height: 3em; border-top-left-radius: 25px; border-top-right-radius: 25px; background-color: #8b7d7d; text-align: center">
            <legend>Acceso</legend>
        </div><br>
        <a class="btn btn-large btn-block btn-primary" href="Registro.php">Registrarme</a>
        <a class="btn btn-large btn-block" href="Login.php">Iniciar Sesion</a><br><br>           
    ';
}

function Regresa_Logeado(){
    return '
                <legend>Bienvenido'.' '.$_SESSION['UserName'].' </legend>
                <a class="boton btn-link" style="color: #cf2020" href="Upload.php">Cargar foto de perfil</a><br><br>
                <div class="image img-polaroid">
                    <img src="../'.$_SESSION['UserRutaFoto'].$_SESSION['UserFoto'].'">
		</div>
                <p><small><strong>Nombre: '.$_SESSION['UserName'].' '.$_SESSION['UserApellidos'].'</strong></small></p>
                <p><small><strong>Email: '.$_SESSION['UserEmail'].'</strong></small></p>
                <p><small><strong>Telefono: '.$_SESSION['UserTelefono'].'</strong></small></p>
                
                <a class="boton btn-link" style="color: #cf2020" href="M_Registro.php">Cambiar mi informacion</a><br><br>           
                <a class="btn btn-primary" href="Logout.php" >Cerrar Sesion</a><br><br>           
                ';    
}

function A_Logearse($id){  
            
            $sql="select * from tblClientes where IdCliente=".$id;
            $query= mysql_query($sql);
            $row=  mysql_fetch_array($query);

  	    $_SESSION['IdUser']=$row['IdCliente'];
            $_SESSION['UserName']=$row['Nombre'];
            $_SESSION['UserApellidos']=$row['Apellidos'];
            $_SESSION['UserTelefono']=$row['Telefono'];
            $_SESSION['UserEmail']=$row['Email'];
            $_SESSION['UserNacimiento']=$row['Nacimiento'];
            $_SESSION['UserUsuario']=$row['Usuario'];
            $_SESSION['UserPass']=$row['Password'];                           
            $_SESSION['UserRutaFoto']=$row['Ruta'];                           
            $_SESSION['UserFoto']=$row['Foto'];            
}

function Cierra_Session(){
    session_destroy();  
    unset($_SESSION['IdUser']);
}
?>


<?php
include '../Admin/Model/conexion.php';

session_start();

$_SESSION['IdUser'];
$_SESSION['UserName'];
$_SESSION['UserPass'];

function Regresa_Logeo(){
    return $Cont_Login='<form action="../model/Login.php" method="POST">
                <legend>Acceso</legend>
                <fieldset>
                    <input type="text" class="input-small" placeholder="Email">
                    <input type="password" class="input-small" placeholder="Password">
                    <label class="checkbox">
                      <input type="checkbox"> Recordarme
                    </label>
                    <button type="submit" class="btn">Inciar Sesion</button>
                  </fieldset>                
          </form>';
}

function Regresa_Logeado(){
    return $Cont_Logeado='
                <legend>Bienvenido'.' '.$_SESSION['UserName'].' </legend>
                <a class="boton btn-link" style="color: #cf2020" href="Upload.php">Cargar foto de perfil</a><br><br>
                <div class="image img-polaroid">
                    <img src="../'.$_SESSION['UserRutaFoto'].$_SESSION['UserFoto'].'">
		</div>
                <p><small><strong>Nombre: '.$_SESSION['UserName'].' '.$_SESSION['UserApellidos'].'</strong></small></p>
                <p><small><strong>Email: '.$_SESSION['UserEmail'].'</strong></small></p>
                <p><small><strong>Telefono: '.$_SESSION['UserTelefono'].'</strong></small></p>
                
                <a class="boton btn-link" style="color: #cf2020" href="M_Registro.php">Cambiar mi informacion</a><br><br>           
                <button type="submit" class="btn" onsubmit="Cierra_Session();">Cerrar Sesion</button>';    
}

function A_Logearse($Id){    
  	$sql = sprintf("SELECT * FROM tblClientes where IdCliente=%d",(int)$Id);
	$clie = mysql_query($sql);
	$num_rs_clie= mysql_num_rows($clie);
	
        if ($num_rs_clie==0){
		echo "Occurio un erro!, No se encontro ningun resultado con la clave".$Id;
		Cierra_Session();
	}else{	
            $rs_clie = mysql_fetch_assoc($clie);  

            $_SESSION['IdUser']=$rs_clie['IdCliente'];
            $_SESSION['UserName']=$rs_clie['Nombre'];
            $_SESSION['UserApellidos']=$rs_clie['Apellidos'];
            $_SESSION['UserTelefono']=$rs_clie['Telefono'];
            $_SESSION['UserEmail']=$rs_clie['Email'];
            $_SESSION['UserNacimiento']=$rs_clie['Nacimiento'];
            $_SESSION['UserUsuario']=$rs_clie['Usuario'];
            $_SESSION['UserPass']=$rs_clie['Password'];                           
            $_SESSION['UserRutaFoto']=$rs_clie['Ruta'];                           
            $_SESSION['UserFoto']=$rs_clie['Foto'];                           
        }
}
function Cierra_Session(){
    session_destroy();    
}

?>
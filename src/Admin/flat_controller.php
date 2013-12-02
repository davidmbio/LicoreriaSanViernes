<?php
include 'Model/conexion.php';
session_start();

function getState(){
    if(!isset($_SESSION['IdEmp']))
        header("Location: ../../Public/views/index.php") ;
}

function destroyed_sesion(){
    session_destroy();
    unset($_SESSION['IdEmp']);
    unset($_SESSION['Start']);
    getState();
}

function CreateSesionVar($id){   
    $_SESSION['IdEmp']=$id;
    getInfSesion();
}
function getInfSesion(){
    $meses = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio", "Julio", "Agosto", "Septiembre","Octubre","Noviembre","Diciembre");
    $dias=  array('Lunes','Martes','Miercules','Jueves','Viernes','Sabado','Domingo');
    
    $_SESSION['Start']='<h3>'.$dias[date('w')-1].' '.date('j').' de '.$meses[date('n')-1].' del '.date('Y').'<br>a las<br>'.
    date('g:i:s a').'</h3>';
    
}


function getInformation(){
    $query = "select * from tblEmpleados where IdEmpleado=".$_SESSION['IdEmp'];
    $per = mysql_query($query);
    $num_rs_per = mysql_fetch_array($per);
	
    return $num_rs_per;
}
?>
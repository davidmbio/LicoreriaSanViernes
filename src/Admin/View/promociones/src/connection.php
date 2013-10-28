<?php
$host= "localhost";
$user = "root";
$pass = "dave";
$db = "bdLicoreria";

connect($host, $user, $pass, $db);

function connect($host, $user, $pass, $db){
    $connection = mysql_connect($host, $user, $pass) 
            or die(mysql_errno());
    
    mysql_select_db($db, $connection)
            or die(mysql_errno());
}


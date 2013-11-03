<?php

include '../Controller_master.php';

echo $_POST['user'].' '.$_POST['pass'];

//A_Logearse();

header("../views/index.php");

echo '<br><br> <a  href="../views/"> regresar</a>'
?>
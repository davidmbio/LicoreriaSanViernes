<?php

function  getMatriz(){
    return $Tabla= array(
    array('A','B','C','D','E','F','G','H','I'), 
    array('J','K','L','M','N','Ñ','O','P','Q'),
    array('R','S','T','U','V','W','X','Y','Z'),      
    array('a','b','c','d','e','f','g','h','i'),      
    array('j','k','l','m','n','ñ','o','p','q'),      
    array('r','s','t','u','v','w','x','y','z'),      
    array('0','1','2','3','4','5','6','7','8'),           
    array('9'));
}
function getEncripted($Clave){
 $Tabla=  getMatriz();   
for ($i = 0; $i < (strlen($Clave)); $i++){
    $Puntero = false;
    $Buscar=substr($Clave, $i,1);   
    for ($j = 0; $j <8; $j++){
        if ($Puntero==true)
            break;
        else{
            for ($z=0; $z<9; $z++){
                if ($Tabla[$j][$z]==$Buscar){
                    $Secreta = $Secreta.(($j + 1).($z + 1));
                    $Puntero = true;
                    break;
                }
            }
        }
    }
}
return $Secreta;
}
function  getDecrypted($Clave){
     $Tabla=getMatriz();
    for ($i = 0; $i < (strlen($Clave)); $i=$i+2){
        $Buscar = substr($Clave, $i,2);
        $Secreta=$Secreta.$Tabla[(substr($Buscar, 0,1)-1)][(substr($Buscar, 1,1)-1)];
    }
    return $Secreta;
}
?>

<?php
//Determinar si un año es binisto o no
$a = 2024; 
if(($a % 4 == 0 && $a % 100 != 0) || ($a % 400 == 0)) {
    echo "$a es un año bisiesto.";
}else {
    echo "$a no es un año bisiesto.";
}
?>

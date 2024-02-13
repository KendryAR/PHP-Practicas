
<?php
$vfinal=30;
$vinicial=5;
$gravedad=9.81;

$tiempo=($vfinal-$vinicial)/$gravedad;
$altura=$vinicial*$tiempo+0.5*pow($tiempo,2);


print "El tiempo es: $tiempo <br>" ;
print "La altura es: $altura <br>";
print "Velocidad total: $vfinal<br>";
?>
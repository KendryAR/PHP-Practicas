<?php
// Calcular la distancia recorrida por un cuerpo acelerado

$velocidad=10;
$tiempo=5;
$aceleracion=2;

$d=$velocidad*$tiempo+1/2*$aceleracion*pow($tiempo,2);
print"La distancia es: $d";

?>
<?php
/*Ejercicio 3: Calcular la edad promedio de un grupo de personas

Definir un conjunto de edades: Crea un conjunto de edades de personas en el grupo.
Determinar el total de personas: Calcula cuántas personas hay en el grupo.
Sumar las edades: Calcula la suma de todas las edades en el conjunto.
Calcular la edad promedio: Divide la suma total de las edades por el número total de personas para obtener la edad promedio.
Presentar la edad promedio: Muestra la edad promedio al usuario.*/


$edades = array('edad1'=>24,
                 'edad2'=>19,
                 'edad3'=>16,
                 'edad4'=>32,
);
$promedio=0;
$idad=0;
$idad = count($edades);
foreach ($edades as $edad => $n_d_edades) {
       print " <br> $edad: $n_d_edades";
}
$total_edades = array_sum($edades);
$promedio=$total_edades/$idad;

print" <br> La suma de edades es: $total_edades";
print" <br> La edad promedio es de: $promedio";

?>
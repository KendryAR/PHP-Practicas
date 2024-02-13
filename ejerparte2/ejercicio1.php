<?php
/*Ejercicio 1: Calcular el promedio de las calificaciones de un estudiante

.Definir un conjunto de calificaciones: Inicia creando un conjunto de calificaciones del estudiante en diferentes asignaturas, 
 representadas como un conjunto de números.
.Calcular el total de calificaciones:  cuántas calificaciones hay en el conjunto.
.Sumar todas las calificaciones: Suma todas las calificaciones para obtener su total.
.Calcular el promedio: Divide la suma total de las calificaciones por el número total de calificaciones para obtener el promedio.
.Mostrar el promedio: Presenta el promedio calculado al usuario */

//CREO UN ARRAY
$notas =[ 'n1'=> 22,
        'n2'=> 9,
        'n3'=> 8,
        'n4'=> 12,
        'n5'=> 19,
        'n6'=> 24,
];
//VARIABLES 
$pipi=0;
$promedio=0;
$pipi = count($notas);
//ARRAYS . CLAVE . VALOR 
foreach ($notas as $calificaciones => $P_calificaciones) {
    echo " <br> $calificaciones  $P_calificaciones";
}
//SUMA TOTAL DEL ARRAY (INDICES)
$total=array_sum($notas);
$promedio+=$total/$pipi;
//IMPRIMIR PROMEDIO
echo " <br> Calificacion de notas: $promedio";
?>  
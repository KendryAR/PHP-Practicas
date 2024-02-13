<?php
/*Ejercicio 4: Contar la cantidad de votos válidos en una elección

Registrar los votos: Registra los votos emitidos en una elección, incluyendo los votos para diferentes candidatos y los votos nulos.
Contar los votos válidos: Calcula la cantidad total de votos válidos excluyendo los votos nulos.
Informar los resultados: Presenta la cantidad total de votos válidos.*/

$votos = array('Vemitidos'=>6,
               'Vvalidos' =>5,
               'Vnulos'=>9,
            );

$numero=0;

foreach ($votos as $status=> $numer_votos) {
    echo "$status :$numer_votos <br> ";
    if ($status !== 'Vnulos') {
      $numero +=$numer_votos;
    }
}

print "La suma de votos emitidos y votos validos es $numero";






?>
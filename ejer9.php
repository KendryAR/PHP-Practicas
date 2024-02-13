<?php
$longitud = 12;
$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-={}[]|\\:;\'"<>,.?/';
$contrasena = '';

for ($i = 0; $i < $longitud; $i++) {
    $indice = rand(0, strlen($caracteres) - 1);
    $contrasena .= $caracteres[$indice];
}
echo "Contraseña generada: $contrasena";
?>

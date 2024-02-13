<?php
/*Ejercicio 5: Calcular el precio total de los productos comprados

Establecer los precios de los productos: Define los precios de los productos disponibles en una tienda.
Crear un carrito de compras: Crea una lista de productos que el cliente ha comprado.
Calcular el precio total: Suma los precios de todos los productos en el carrito de compras.
Mostrar el precio total: Presenta el precio total de los productos comprados al cliente.*/ 

$suma=0;

$products = [
    'Jeans'=>38,
    'Polo'=>10,
    'Polera'=>23,
    'Medias'=>14,
    
];
foreach ($products as $product => $price) {
    print " <br> nombre: $product S/.$price";
    $suma += $price;
}

$precioTotal =array_sum($products);
print "<br> Suma de los productos : $suma";






?>
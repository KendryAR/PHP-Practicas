<?php
/*Ejercicio 2: Determinar si un producto está disponible en el inventario

Establecer el inventario de productos: Define un inventario que contenga los productos disponibles y la cantidad de cada uno.
Verificar la existencia del producto: Revisa si el producto deseado está presente en el inventario y si hay suficiente cantidad disponible.
Informar al usuario: Indica al usuario si el producto está disponible o no en el inventario.*/

$inventario = [
    "producto1" => 10,
    "producto2" => 5,
    "producto3" => 20,
];
$productodeseado = "producto2";
$cantidad_deseada = 15;

if (isset($inventario[$productodeseado])) {
    if ($inventario[$productodeseado] >= $cantidadRequerida) {
        echo "El producto '$producto_deseado' está disponible en el inventario y hay suficiente cantidad disponible.";
    } else {
        echo "El producto '$producto_deseado' está en el inventario, pero no hay suficiente cantidad disponible.";
    }
} else {
    echo "El producto '$producto_deseado' no está disponible en el inventario.";
}
?>
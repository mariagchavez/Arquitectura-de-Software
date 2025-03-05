<?php
// DefiniciOn de la clase Producto
class Producto {
    // Método estAtico que devuelve una lista de productos simulada
    public static function obtenerProductos() {
        return [
            // Cada producto es un array asociativo con id, nombre y precio
            ["id" => 1, "nombre" => "Laptop", "precio" => 12000],
            ["id" => 2, "nombre" => "Mouse", "precio" => 300],
            ["id" => 3, "nombre" => "Teclado", "precio" => 500]
        ];
    }
}
?>

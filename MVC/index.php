<?php
// Incluye el archivo del controlador de productos
require_once "controller/productoController.php";

// Crea una instancia del controlador de productos
$controlador = new ProductoController();

// Llama al méeetodo mostrarProductos() para obtener y mostrar los productos
$controlador->mostrarProductos();
?>

<?php
require_once "./model/productoModel.php";

class ProductoController {
    public function mostrarProductos() {
        $productos = Producto::obtenerProductos();
        require "./view/productoView.php";
    }
}
?>

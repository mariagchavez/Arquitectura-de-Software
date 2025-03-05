<?php
// Incluir el archivo del modelo donde esta la clase Producto
require_once "./model/productoModel.php";

class ProductoController {
    // Metodo para obtener y mostrar la lista de productos
    public function mostrarProductos() {
        // Llamar al método estaatico obtenerProductos() de la clase Producto
        $productos = Producto::obtenerProductos();
        
        // Incluir la vista que mostrara los productos en la interfaz
        require "./view/productoView.php";
    }
}
?>

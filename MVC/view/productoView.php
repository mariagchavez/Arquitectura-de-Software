<?php
// Recibe los datos del controlador
if (isset($productos)) {
    echo "<h2>Lista de Productos</h2><ul>";
    foreach ($productos as $producto) {
        echo "<li>{$producto['nombre']} - $ {$producto['precio']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No hay productos disponibles.</p>";
}
?>

<?php
// Verifica si la variable $productos esta definida y contiene datos
if (isset($productos)) {
    // Muestra un tiitulo para la lista de productos
    echo "<h2>Lista de Productos</h2><ul>";
    
    // Recorre el array de productos y los muestra en una lista
    foreach ($productos as $producto) {
        echo "<li>{$producto['nombre']} - $ {$producto['precio']}</li>";
    }
    
    // Cierra la lista HTML
    echo "</ul>";
} else {
    // Si no hay productos disponibles, muestra un mensaje
    echo "<p>No hay productos disponibles.</p>";
}
?>
